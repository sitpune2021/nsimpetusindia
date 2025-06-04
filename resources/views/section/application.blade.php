     <!-- Application Area Start -->
     <div class="application-area pt-80 pb-80 bg-cover" data-background="assets/img/gallery/section_bg03.jpg"
         style="  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6 col-md-10">
                     <!-- Section Tittle -->
                     <div class="section-tittle section-tittle2 text-center mb-45">
                         <span>Apply in Three Easy Steps</span>
                         <h2>Easy Application Process For Any Types of Loan</h2>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-lg-9 col-xl-8">
                     <!--Hero form -->
                     <form id="loanForm" class="search-box">
                         @csrf
                         <div class="input-form input-form-2">
                             <input type="text" name="amount" id="amount" value="500000" required>
                             <label for="amount">Amount</label>
                         </div>
                         <div class="input-form input-form-2">
                             <input type="text" name="years" id="years" value="5" required>
                             <label for="years">Years</label>
                         </div>
                         <div class="input-form">
                             <input type="text" name="interest" id="interest" value="8" required>
                             <label for="interest">Interest (%)</label>
                         </div>
                         <div class="search-form">
                             <button type="submit">Calculate Loan</button>
                         </div>
                     </form>

                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-lg-9 col-xl-8">
                     <div id="result"></div>
                 </div>
             </div>

         </div>
     </div>
     <!-- Application Area End -->

     <!-- Result Display -->
     <script>
         function formatIndianCurrency(amount) {
             return amount.toLocaleString('en-IN');
         }

         function numberToWords(num) {
             const a = [
                 '', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten',
                 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen',
                 'Seventeen', 'Eighteen', 'Nineteen'
             ];
             const b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

             if ((num = num.toString()).length > 9) return 'Overflow';

             let n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{3})$/);
             if (!n) return;
             let str = '';
             str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + ' Crore ' : '';
             str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + ' Lakh ' : '';
             str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + ' Thousand ' : '';
             str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + ' ' : '';
             return str.trim();
         }

         function calculateEMI() {
             const amount = parseFloat(document.getElementById('amount').value);
             const years = parseInt(document.getElementById('years').value);
             const interest = parseFloat(document.getElementById('interest').value);

             const months = years * 12;
             const monthlyRate = interest / 100 / 12;

             const numerator = monthlyRate * Math.pow(1 + monthlyRate, months);
             const denominator = Math.pow(1 + monthlyRate, months) - 1;

             const monthlyEMI = amount * (numerator / denominator);
             const totalPayable = monthlyEMI * months;
             const totalInterest = totalPayable - amount;

             const formattedEMI = `₹${formatIndianCurrency(Math.round(monthlyEMI))}`;
             const formattedPrincipal = `₹${formatIndianCurrency(Math.round(amount))}`;
             const formattedInterest = `₹${formatIndianCurrency(Math.round(totalInterest))}`;
             const formattedTotal = `₹${formatIndianCurrency(Math.round(totalPayable))}`;

             //  const emiInWords = numberToWords(Math.round(monthlyEMI));
             // <p class="mb-0">${emiInWords}</p>


             document.getElementById('result').innerHTML = `

<div class="container mt-4" style="max-width: 700px;">
  <div class="card shadow">
    <div class="card-body">
      
      <h5 class="card-title text-primary">Monthly Loan EMI</h5>
      <div class="bg-light p-3 rounded mb-4">
        <h2 class="text-success mb-1">${formattedEMI}</h2>
      </div>

      <h6 class="text-secondary mb-3">Payment Breakdown</h6>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between">
          <strong>Principal Amount</strong>
          <span>${formattedPrincipal}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <strong>Interest Payable</strong>
          <span>${formattedInterest}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <strong>Total Payable</strong>
          <span class="fw-bold text-danger">${formattedTotal}</span>
        </li>
      </ul>

    </div>
  </div>
</div>

        `;
         }

         document.getElementById('loanForm').addEventListener('submit', function(e) {
             e.preventDefault();
             calculateEMI();
         });

         window.addEventListener('DOMContentLoaded', calculateEMI);
     </script>
