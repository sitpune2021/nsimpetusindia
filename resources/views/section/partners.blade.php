@php
    use Illuminate\Support\Str;

    $personalLoan = config('partners.personal_loan');
    $homeLoan = config('partners.home_loan');
    $loanAgainstProperty = config('partners.loan_against_property');
    $businessLoan = config('partners.business_loan');
@endphp

<div class="home-blog-area section-padding30 pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
                <div class="section-tittle text-center mb-70">
                    <h2>Our Partners</h2>
                    <span>Get in-depth knowledge about all things related to loans and your finances</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-pills custom-pills mb-3 light-br" id="pills-tab" role="tablist" style="position: relative; padding-bottom: 25px;">
                    <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link active" id="pills-personal-tab" data-toggle="pill" data-target="#pills-personal"
                            type="button" role="tab" aria-controls="pills-personal" aria-selected="true">Personal Loan</button>
                    </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="false">Home Loan</button>
                    </li>
                    <li class="nav-item mr-2" role="presentation">
                        <button class="nav-link" id="pills-lap-tab" data-toggle="pill" data-target="#pills-lap"
                            type="button" role="tab" aria-controls="pills-lap" aria-selected="false">Loan Against Property</button>
                    </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-business-tab" data-toggle="pill" data-target="#pills-business"
                            type="button" role="tab" aria-controls="pills-business" aria-selected="false">Business Loan</button>
                    </li>
                   
                </ul>

                <div class="tab-content" id="pills-tabContent">

                    {{-- Personal Loan --}}
                    <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach ($personalLoan as $personal)
                                @php $slug = Str::slug($personal); @endphp
                                <a href="https://www.urbanmoney.com/personal-loan/{{ $slug }}" class="partner-card text-dark mr-3 mb-3">
                                    <div >
                                        {{ $personal }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Home Loan --}}
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach ($homeLoan as $home)
                                @php $slug = Str::slug($home); @endphp
                                <a href="https://www.urbanmoney.com/home-loan/{{ $slug }}" class="partner-card text-dark mr-3 mb-3">
                                    <div >
                                        {{ $home }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Loan Against Property --}}
                    <div class="tab-pane fade" id="pills-lap" role="tabpanel" aria-labelledby="pills-lap-tab">
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach ($loanAgainstProperty as $lap)
                                @php $slug = Str::slug($lap); @endphp
                                <a href="https://www.urbanmoney.com/loan-against-property/{{ $slug }}" class="partner-card text-dark mr-3 mb-3">
                                    <div >
                                        {{ $lap }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Business Loan Property --}}
                    <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach ($businessLoan as $business)
                                @php $slug = Str::slug($business); @endphp
                                <a href="https://www.urbanmoney.com/loan-against-property/{{ $slug }}" class="partner-card text-dark mr-3 mb-3">
                                    <div >
                                        {{ $business }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
