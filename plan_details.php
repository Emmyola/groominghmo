
<?php include_once("conponent/header.php"); ?>

<body>
   <!-- Topbar Start -->
   <?php include_once("conponent/topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
     <?php include_once("conponent/navbar.php"); ?>
    <!-- Navbar End -->


   <!-- Modal details -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gold Health Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>      
                
                    <div class="form-group">
                        <label for="card-name" class="col-form-label">Card Name:</label>
                        <input type="text" class="form-control" id="card-name">
                    </div>
                    <div class="form-group">
                        <label for="card-number" class="col-form-label">Card Number:</label>
                        <input type="text" class="form-control" id="card-number">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Valid Date</label>
                            <input type="date" class="form-control" id="valid-date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvv-card">CVV</label>
                            <input type="text" class="form-control" id="cvv-card">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Buy</button>
            </div>
            </div>
        </div>
        </div>
   <!-- modal details ends -->
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/blog-2.jpg" alt="">
                    <h3 class="mb-4">Gold Health Plan Description</h3>
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                            magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                            amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                            sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                            aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                            sit stet no diam kasd vero.
                        </p>
                    <h4>Benefit Covered</h4>
                    <div class="d-flex justify-content-between bg-light rounded p-4 mt-4">
                        <table class="table">
                            <!-- OUT PATIENT-->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">OUT PATIENT BENEFITS(Up to  Limit of 250000)</th>
                                <th scope="col">STATUS</th>
                                <!-- <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th> -->
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important; ">
                                <tr style="text: blue !important;">
                                    <th scope="row">General Consultation, Specialist Consultation, Out Patient Care including Laboratory Investigations, Basic Imaging (X-Ray & USS)</th>
                                    <td>Covered</td>
                                    <tr>
                                        <th>Prescribed medications and drugs</th>
                                        <td>Covered</td>
                                    </tr>
                                    <!-- <tr>
                                        <th>Prescribed medications and drugs</th>
                                        <td>Covered</td>
                                    </tr> -->
                                </tr>
                            </tbody>
                            <!-- IN PATIENT-->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">IN-PATIENT BENEFIT (Up to  Limit of 350000)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Admission & Feeding</th>
                                    <td>Covered (General Ward)</td>
                                    <tr>
                                        <th>Laboratory investigations, Nursing Care, Dressing & Prescribed Medications</th>
                                        <td>Covered</td>
                                    </tr>
                                    <tr>
                                        <th>Intensive care services</th>
                                        <td>Covered</td>
                                    </tr>
                                </tr>
                            </tbody>
                            <!-- MAJOR DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">MAJOR DISEASE CONDITION BENEFITS (6 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Surgical Procedures (Minor, Intermediate & Major)- including anaesthesia, surgical supplies, blood/blood Products</th>
                                    <td>Covered (Up to N200,000 limit) </td>
                                </tr>
                            </tbody>
                            <!-- REPRODUCTIVE DETAILS --> 
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col"> REPRODUCTIVE HEALTH BENEFIT (3 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Family Planning Service including IUDS, Injectables, Pills, Tubal Ligation(As part of outpatient limit)</th>
                                    <td>Covered (IUCD, pills and Injectables) </td>
                                </tr>
                                <tr>
                                    <th scope="row">Infertility Treatments (As part of outpatient limit)</th>
                                    <td>Covered (Consultation, Counselling, (Up to N20,000 limit))</td>
                                </tr>
                            </tbody>
                            <!-- MATERNAL DETAILS --> 
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col"> MATERNAL BENEFITS (12 Months waiting period) </th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Ante-Natal Care at Registered Network Provider</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Normal Delivery including Post-partum Care</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Operative and Assisted Delivery including Post-partum Care</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Surgical Delivery (As part of Maternal limit)</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Medical Conditions during Pregnancy</th>
                                    <td>Covered</td>
                                </tr>
                            </tbody>
                            <!-- NEONATAL DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">NEONATAL CARE (12 Months waiting period) Up to 200,000 Limit</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Male Circumcision, Ear Piercing, and Routine Immunization, (NPI) 0 - 6 weeks - DPT, Hepatitis B, HiB (Pentavalent), BCG, Measles, Oral Polio, Vitamin A -As part of outpatient limit.</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Exchange Blood Transfusion (0 -6 weeks-As part of inpatient limit)</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Neonatal Intensive Care (Photo therapy, Incubator Care, Special Care Baby Unit, Treatment of Mild /Moderate Neonatal Sepsis) - As part of in-patient limit</th>
                                    <td>Covered (Up to 2 days per Annum)</td>
                                </tr>
                            </tbody>
                            <!-- PEDIATRIC DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">PEDIATRIC CARE (6 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row"> 0 - 5 Years  Immunizations (Chickenpox, Rota-virus, MMR, Pneumococcal, Yellow Fever, Hepatitis B, HIB, Typhoid Fever, Meningitis,) -at designated centres- As part of outpatient limit</th>
                                    <td>Not Covered</td>
                                </tr>
                            </tbody>
                            <!-- PEDIATRIC DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">ACCIDENTS & EMERGENCY BENEFIT (Part of In-patient Limit) up to 150,000.00</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row"> Emergency Evacuation, Investigations </th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Intensive Care Unit(Out of Hospital Network)</th>
                                    <td>Covered(48 Hours)</td>
                                </tr>
                            </tbody>
                            <!-- optical DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">OPTICAL CARE BENEFIT (6 Months waiting period) Up to 12,500.00</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row"> Consultation, Examination, Simple Eye Test and Medications, Optical Lenses and Frames (every 2 years), Optical Surgeries</th>
                                    <td>Covered</td>
                                </tr>
                            </tbody>
                            <!-- DENTAL DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">DENTAL CARE BENEFIT (6 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Primary and Secondary care</th>
                                    <td>Covered (Up to N20,000 per Annum)</td>
                                </tr>
                            </tbody>
                            <!-- PHYSIOTHERAPY DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">PHYSIOTHERAPY SERVICES (6 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Physiotherapy- As part of in-patient limit</th>
                                    <td>Covered (Up to 5 Session)</td>
                                </tr>
                            </tbody>
                            <!-- DIAGNOSTIC DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">DIAGNOSTIC SERVICES</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Basic Radio-logical Investigations (xrays, scans) and  Laboratory Test</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Advanced and Complex Investigation(12 Months waiting period)</th>
                                    <td>Not Covered</td>
                                </tr>
                            </tbody>
                            <!-- PRE EXISTING DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">PRE EXISTING/ CHRONIC CONDITION</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Preexisting/Chronic conditions (After 12 months waiting period)</th>
                                    <td>As Part of Outpatient</td>
                                </tr>
                            </tbody>
                            <!-- PRE EXISTING DETAILS -->
                            <thead style="text-align: center !important; background-color: blue !importtant;">
                                <tr>
                                <th scope="col">OTHER SERVICES/BENEFITS (18 Months waiting period)</th>
                                <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center !important;">
                                <tr>
                                    <th scope="row">Annual Health Screening at Designated Centres</th>
                                    <td>Physical Examination, Urinalysis, PCV, Blood pressure, Blood Sugar</td>
                                </tr>
                                <tr>
                                    <th scope="row">Psychiatric Treatment (Outpatient Only) Outpatient Limit</th>
                                    <td>Not Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">HIV/AIDS Care and Treatment at Designated Specialist Centres</th>
                                    <td>Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Second Opinion Services</th>
                                    <td>Not Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Reimbursement for Delivery Overseas</th>
                                    <td>Not Covered</td>
                                </tr>
                                <tr>
                                    <th scope="row">Reimbursement for Surgery Overseas</th>
                                    <td>Not Covered</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="button" class="btn btn-primary rounded-pill py-3 px-5 my-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Buy Plan</button>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

                <button text="submit" class="btn btn-primary rounded-pill py-3 px-5 my-2" >Buy Plan</button> -->
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->

    <!-- footer -->
    <?php include_once("conponent/footer.php"); ?>
    <!-- end footer -->
</body>

</html>