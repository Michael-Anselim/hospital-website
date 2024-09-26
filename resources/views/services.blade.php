@extends('layout.app')

@section('title','IPD')

@section('content')

<div class="container mt-5">
    <div class="row">
        <!-- Outpatient & Inpatient Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top"
                    alt="Outpatient & Inpatient Services" />
                <div class="card-body">
                    <h5 class="card-title">OUTPATIENT & INPATIENT SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Emergency Or Observation Services
                        </li>
                        <li class="list-group-item">Diagnostics Laboratory Tests</li>
                        <li class="list-group-item">Medical Supplies</li>
                        <li class="list-group-item">
                            Preventative And Screening Services
                        </li>
                        <li class="list-group-item">Maternity Care</li>
                        <li class="list-group-item">Pediatric Care</li>
                        <li class="list-group-item">Intensive Care Unit (ICU)</li>
                        <li class="list-group-item">Emergency Care</li>
                        <li class="list-group-item">Infectious Disease Treatment</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Laboratory Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top" alt="Laboratory Services" />
                <div class="card-body">
                    <h5 class="card-title">LABORATORY SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">HIV Antibody Test</li>
                        <li class="list-group-item">Tuberculosis Test (GeneXpert)</li>
                        <li class="list-group-item">Blood Glucose Test</li>
                        <li class="list-group-item">Hepatitis B and C</li>
                        <li class="list-group-item">ESR</li>
                        <li class="list-group-item">Urinalysis</li>
                        <li class="list-group-item">Brucella Test</li>
                        <li class="list-group-item">
                            H. Pylori Tests Antibody and Antigen
                        </li>
                        <li class="list-group-item">Rheumatoid Factor</li>
                        <li class="list-group-item">Sputum Culture</li>
                        <li class="list-group-item">Stool Exam for Parasites</li>
                        <li class="list-group-item">Hemoglobin Level</li>
                        <li class="list-group-item">Serology for Typhoid Fever</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Radiology Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top" alt="Radiology Services" />
                <div class="card-body">
                    <h5 class="card-title">RADIOLOGY SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">X-ray</li>
                        <li class="list-group-item">Ultrasound</li>
                        <li class="list-group-item">ECG’s</li>
                        <li class="list-group-item">HCG’s</li>
                        <li class="list-group-item">B Swallow</li>
                        <li class="list-group-item">ECHO</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Dental Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top" alt="Dental Services" />
                <div class="card-body">
                    <h5 class="card-title">DENTAL SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Dental Check-ups</li>
                        <li class="list-group-item">Teeth Cleaning (Prophylaxis)</li>
                        <li class="list-group-item">
                            Fillings (Composite and Amalgam)
                        </li>
                        <li class="list-group-item">Tooth Extractions</li>
                        <li class="list-group-item">Root Canal Treatment</li>
                        <li class="list-group-item">Dental Crowns</li>
                        <li class="list-group-item">
                            Dentures (Complete and Partial)
                        </li>
                        <li class="list-group-item">Teeth Whitening</li>
                        <li class="list-group-item">Dental Sealants</li>
                        <li class="list-group-item">Periodontal (Gum) Treatment</li>
                        <li class="list-group-item">Dental Implants</li>
                        <li class="list-group-item">X-rays (Dental Radiographs)</li>
                        <li class="list-group-item">Pediatric Dentistry</li>
                        <li class="list-group-item">Tooth Sensitivity Treatment</li>
                        <li class="list-group-item">Emergency Dental Care</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Maternal Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/maternity.jpg')}}" class="card-img-top" alt="Maternal Services" />
                <div class="card-body">
                    <h5 class="card-title">MATERNAL SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Antenatal Care (ANC)</li>
                        <li class="list-group-item">Labor and Delivery Services</li>
                        <li class="list-group-item">Postnatal Care (PNC)</li>
                        <li class="list-group-item">Family Planning Counseling</li>
                        <li class="list-group-item">
                            Immunization Services for Mothers and Infants
                        </li>
                        <li class="list-group-item">
                            Health Education and Counseling
                        </li>
                        <li class="list-group-item">
                            Nutritional Support and Counseling
                        </li>
                        <li class="list-group-item">
                            Management of Pregnancy Complications
                        </li>
                        <li class="list-group-item">
                            Breastfeeding Support and Counseling
                        </li>
                        <li class="list-group-item">
                            Maternal Mental Health Services
                        </li>
                        <li class="list-group-item">Intrapartum Care</li>
                        <li class="list-group-item">
                            Vaginal and Cesarean Deliveries
                        </li>
                        <li class="list-group-item">Postpartum Family Planning</li>
                        <li class="list-group-item">
                            Treatment of Common Ailments (e.g., anemia)
                        </li>
                        <li class="list-group-item">
                            Community Health Outreach Programs
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Surgical & Procedural Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top"
                    alt="Surgical and Procedural Services" />
                <div class="card-body">
                    <h5 class="card-title">SURGICAL AND PROCEDURAL SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Minor Surgical Procedures</li>
                        <li class="list-group-item">Wound Care and Management</li>
                        <li class="list-group-item">Suturing of Lacerations</li>
                        <li class="list-group-item">Circumcision</li>
                        <li class="list-group-item">Removal of Skin Lesions</li>
                        <li class="list-group-item">
                            Surgical Treatment of Fractures
                        </li>
                        <li class="list-group-item">Hernia Repair</li>
                        <li class="list-group-item">Cesarean Sections</li>
                        <li class="list-group-item">Appendectomy</li>
                        <li class="list-group-item">Tubal Ligation</li>
                        <li class="list-group-item">Management of Open Wounds</li>
                        <li class="list-group-item">Surgical Drain Placement</li>
                        <li class="list-group-item">Biopsy Procedures</li>
                        <li class="list-group-item">Treatment of Hemorrhoids</li>
                        <li class="list-group-item">Emergency Trauma Surgery</li>
                        <li class="list-group-item">
                            Management of Obstetric Emergencies
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CTC Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top" alt="CTC Services" />
                <div class="card-body">
                    <h5 class="card-title">CTC SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">HIV Care and Treatment</li>
                        <li class="list-group-item">
                            HIV Counseling and Testing (HTC)
                        </li>
                        <li class="list-group-item">Antiretroviral Therapy (ART)</li>
                        <li class="list-group-item">Viral Load Monitoring</li>
                        <li class="list-group-item">
                            Prevention of Mother-to-Child Transmission (PMTCT)
                        </li>
                        <li class="list-group-item">
                            Management of Opportunistic Infections
                        </li>
                        <li class="list-group-item">
                            Adherence Counseling and Support
                        </li>
                        <li class="list-group-item">
                            HIV Prevention and Risk Reduction Counseling
                        </li>
                        <li class="list-group-item">
                            Family Planning and Reproductive Health Services for HIV
                            Patients
                        </li>
                        <li class="list-group-item">
                            Nutritional Support for HIV Patients
                        </li>
                        <li class="list-group-item">HIV Drug Resistance Testing</li>
                        <li class="list-group-item">
                            Management of HIV in Children and Adolescents
                        </li>
                        <li class="list-group-item">
                            Linkages to Community Support Services
                        </li>
                        <li class="list-group-item">
                            HIV Testing for Partners and Children
                        </li>
                        <li class="list-group-item">
                            Support Groups for People Living with HIV (PLHIV)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- RCH Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/rch.jpg')}}" class="card-img-top" alt="RCH Services" height="17.5%" />
                <div class="card-body">
                    <h5 class="card-title">RCH SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Antenatal care (ANC)</li>
                        <li class="list-group-item">Postnatal care (PNC)</li>
                        <li class="list-group-item">Family planning services</li>
                        <li class="list-group-item">Immunization for children</li>
                        <li class="list-group-item">Child growth monitoring</li>
                        <li class="list-group-item">
                            Management of pregnancy complications
                        </li>
                        <li class="list-group-item">Safe delivery services</li>
                        <li class="list-group-item">Counseling on breastfeeding</li>
                        <li class="list-group-item">
                            Adolescent reproductive health education
                        </li>
                        <li class="list-group-item">
                            Management of sexually transmitted infections (STIs)
                        </li>
                        <li class="list-group-item">
                            Nutritional counseling for mothers and children
                        </li>
                        <li class="list-group-item">
                            Referral services for high-risk pregnancies
                        </li>
                        <li class="list-group-item">
                            Health education on reproductive health
                        </li>
                        <li class="list-group-item">Screening for cervical cancer</li>
                        <li class="list-group-item">
                            Treatment of common childhood illnesses
                        </li>
                        <li class="list-group-item">
                            Management of postpartum complications
                        </li>
                        <li class="list-group-item">
                            Community outreach programs for maternal and child health
                        </li>
                        <li class="list-group-item">
                            Support for HIV prevention in pregnant women
                        </li>
                        <li class="list-group-item">
                            Coordination of community health initiatives
                        </li>
                        <li class="list-group-item">
                            Psychosocial support for mothers and children
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Pharmaceutical Services -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/services/radiology.jpg')}}" class="card-img-top" alt="Pharmaceutical Services" />
                <div class="card-body">
                    <h5 class="card-title">PHARMACEUTICAL SERVICES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Dispensing of prescription medications</li>
                        <li class="list-group-item">Medication counseling and education</li>
                        <li class="list-group-item">
                            Management of chronic diseases (e.g., diabetes,
                            hypertension)
                        </li>
                        <li class="list-group-item">Inventory management of pharmaceuticals</li>
                        <li class="list-group-item">Patient medication reviews</li>
                        <li class="list-group-item">Administration of vaccinations</li>
                        <li class="list-group-item">Providing over-the-counter medications</li>
                        <li class="list-group-item">Monitoring for adverse drug reactions</li>
                        <li class="list-group-item">Community health education on proper medication use</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection