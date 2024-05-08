@extends('layouts.app')

@section('content')
    <section class="register register-login">
        <div class="register-overlay  register-login-overlay">
            <div class="container-fluid">
                <form class="row justify-content-center needs-validation" novalidate id="regForm" method="POST"
                    action="{{ route('courses.get-report', $course->id) }}">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="head-section text-center">
                            <h2>Download Report</h2>
                        </div>
                        <div class="row tab">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="recommendations" id="recommendations" placeholder="Recommendations" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row tab">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="comments" id="comments" placeholder="Comments" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div style="overflow:auto;">
                            <div style="text-align:center;display: flex;justify-content: center;gap: 20px;">
                                <button type="button" id="prevBtn" class="btn"
                                    onclick="nextPrev(-1)"><span>Previous</span></button>
                                <button type="button" id="nextBtn" class="btn"
                                    onclick="nextPrev(1)"><span>Next</span></button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn userSubmitCourse"><span>add</span></button>
                                </div>
                            </div> -->
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "flex";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "<span>Download File</span>";
                // document.getElementById("nextBtn").onclick = null;
                // document.getElementById("nextBtn").setAttribute("type", "submit");


            } else {
                document.getElementById("nextBtn").innerHTML = "<span>Next</span>";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
@endsection
