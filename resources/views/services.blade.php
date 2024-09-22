@extends('layout.app')

@section('title','Services')

@section('content')

<section id="mu-service-content" class="container" style="margin-bottom: 20px;">
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">OUTPATIENT SERVICES</h3>
            <ul class="service-list">
                <li>Emergency Or Observation Services</li>
                <li>Diagnostics Laboratory Tests</li>
                <li>Medical Supplies</li>
                <li>Preventative And Screening Services</li>
                <li>X-Rays And Other Radiology Services</li>
                <li>Minor Procedures</li>
                <li>Counselling</li>
                <li>Dental Services</li>
                <li>ECG And HCG’s</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">INPATIENT SERVICES</h3>
            <ul class="service-list">
                <li>General medicine</li>
                <li>Surgical care</li>
                <li>Maternity care</li>
                <li>Pediatric care</li>
                <li>Intensive care unit (ICU)</li>
                <li>Emergency care</li>
                <li>Infectious disease treatment</li>
                <li>Pain management</li>
                <li>Palliative care</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">LABORATORY SERVICES</h3>
            <ul class="service-list">
                <li>Complete Blood Count (CBC)</li>
                <li>Malaria Rapid Diagnostic Test</li>
                <li>HIV Antibody Test</li>
                <li>Tuberculosis Test (GeneXpert)</li>
                <li>Blood Glucose Test</li>
                <li>Hepatitis B Surface Antigen Test</li>
                <li>Hepatitis C Antibody Test</li>
                <li>Urinalysis</li>
                <li>Blood Typing</li>
                <li>H. Pylori Tests</li>
                <li>Thyroid Function Tests</li>
                <li>Sputum Culture</li>
                <li>Stool Exam for Parasites</li>
                <li>Liver Function Tests</li>
                <li>Serology for Typhoid Fever</li>
            </ul>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">RADIOLOGY SERVICES</h3>
            <ul class="service-list">
                <li>X-ray</li>
                <li>Ultrasound</li>
                <li>Chest X-ray</li>
                <li>Abdominal Ultrasound</li>
                <li>Pelvic Ultrasound</li>
                <li>Doppler Ultrasound</li>
                <li>Spine X-ray</li>
                <li>Extremity X-ray</li>
                <li>Sinus X-ray</li>
                <li>ECG’s</li>
                <li>HCG’s</li>
                <li>B Swallow</li>
                <li>Small Part USS</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">DENTAL SERVICES</h3>
            <ul class="service-list">
                <li>Dental Check-ups</li>
                <li>Teeth Cleaning (Prophylaxis)</li>
                <li>Fillings (Composite and Amalgam)</li>
                <li>Tooth Extractions</li>
                <li>Root Canal Treatment</li>
                <li>Dental Crowns</li>
                <li>Dentures (Complete and Partial)</li>
                <li>Teeth Whitening</li>
                <li>Dental Sealants</li>
                <li>Periodontal (Gum) Treatment</li>
                <li>Dental Implants</li>
                <li>X-rays (Dental Radiographs)</li>
                <li>Pediatric Dentistry</li>
                <li>Tooth Sensitivity Treatment</li>
                <li>Emergency Dental Care</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">MATERNAL SERVICES</h3>
            <ul class="service-list">
                <li>Antenatal Care (ANC)</li>
                <li>Labor and Delivery Services</li>
                <li>Postnatal Care (PNC)</li>
                <li>Family Planning Counseling</li>
                <li>Immunization Services for Mothers and Infants</li>
                <li>Health Education and Counseling</li>
                <li>Nutritional Support and Counseling</li>
                <li>Management of Pregnancy Complications</li>
                <li>Breastfeeding Support and Counseling</li>
                <li>Maternal Mental Health Services</li>
                <li>Intrapartum Care</li>
                <li>Vaginal and Cesarean Deliveries</li>
                <li>Postpartum Family Planning</li>
                <li>Treatment of Common Ailments (e.g., anemia)</li>
                <li>Community Health Outreach Programs</li>
            </ul>
        </div>
    </div>


    <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">SURGICAL AND PROCEDURAL SERVICES</h3>
            <ul class="service-list">
                <li>Minor surgical procedures (e.g., abscess drainage)</li>
                <li>Wound care and management</li>
                <li>Suturing of lacerations</li>
                <li>Circumcision</li>
                <li>Removal of skin lesions (e.g., moles, cysts)</li>
                <li>Surgical treatment of fractures</li>
                <li>Hernia repair</li>
                <li>Cesarean sections</li>
                <li>Appendectomy</li>
                <li>Tubal ligation</li>
                <li>Management of open wounds</li>
                <li>Surgical drain placement</li>
                <li>Biopsy procedures</li>
                <li>Treatment of hemorrhoids</li>
                <li>D&C (dilation and curettage)</li>
                <li>Removal of foreign bodies</li>
                <li>Emergency trauma surgery</li>
                <li>Management of obstetric emergencies</li>
                <li>Gastrostomy tube placement</li>
                <li>Palliative surgical procedures</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">CTC SERVICES</h3>
            <ul class="service-list">
                <li>Antiretroviral therapy (ART) for HIV</li>
                <li>Voluntary counseling and testing for HIV</li>
                <li>Prevention of mother-to-child transmission (PMTCT)</li>
                <li>Management of opportunistic infections</li>
                <li>Adherence support for HIV patients</li>
                <li>Community health education on HIV/AIDS</li>
                <li>Screening and management of sexually transmitted infections (STIs)</li>
                <li>Nutritional support for people living with HIV</li>
                <li>Psychosocial support and counseling</li>
                <li>Mobile outreach services for testing and treatment</li>
                <li>Health education on reproductive health</li>
                <li>Coordination of support groups for HIV patients</li>
                <li>Home-based care for individuals with HIV</li>
                <li>Referrals to specialized care and services</li>
                <li>Vaccination services for HIV-positive individuals</li>
                <li>STI prevention and education programs</li>
                <li>Blood safety and screening programs</li>
                <li>Training for community health workers</li>
                <li>Support for gender-based violence survivors</li>
                <li>Integration of HIV services with maternal and child health programs</li>
            </ul>
        </div>

        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">RCH SERVICES</h3>
            <ul class="service-list">
                <li>Antenatal care (ANC)</li>
                <li>Postnatal care (PNC)</li>
                <li>Family planning services</li>
                <li>Immunization for children</li>
                <li>Child growth monitoring</li>
                <li>Management of pregnancy complications</li>
                <li>Safe delivery services</li>
                <li>Counseling on breastfeeding</li>
                <li>Adolescent reproductive health education</li>
                <li>Management of sexually transmitted infections (STIs)</li>
                <li>Nutritional counseling for mothers and children</li>
                <li>Referral services for high-risk pregnancies</li>
                <li>Health education on reproductive health</li>
                <li>Screening for cervical cancer</li>
                <li>Treatment of common childhood illnesses</li>
                <li>Management of postpartum complications</li>
                <li>Community outreach programs for maternal and child health</li>
                <li>Support for HIV prevention in pregnant women</li>
                <li>Coordination of community health initiatives</li>
                <li>Psychosocial support for mothers and children</li>
            </ul>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-4 col-md-6">
            <h3 style="font-weight: bold;">PHARMACEUTICAL</h3>
            <ul class="service-list">
                <li>Dispensing of prescription medications</li>
                <li>Medication counseling and education</li>
                <li>Management of chronic diseases (e.g., diabetes, hypertension)</li>
                <li>Inventory management of pharmaceuticals</li>
                <li>Patient medication reviews</li>
                <li>Administration of vaccinations</li>
                <li>Providing over-the-counter medications</li>
                <li>Monitoring for adverse drug reactions</li>
                <li>Community health education on proper medication use</li>
            </ul>
        </div>
    </div>

</section>

@endsection