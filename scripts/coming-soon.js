(function(){
  var formElement = document.getElementById('email');

  formElement.addEventListener('submit', function(formSubmitEvent){
    var formAction = 'https://script.google.com/macros/s/AKfycbw09Ueu_doOlJXDxL_olw75cs3Ci9UtR2gjgI5D4nS9endcHgMT/exec';
    var sheetName = 'email-list';
    var formData, formSubmit;
    formSubmitEvent.preventDefault();
    
    this.classList.add('submitting');
    formData = new FormData(this);
    formData.append('sheet_name', sheetName);

    formSubmit = new XMLHttpRequest();
    formSubmit.addEventListener("load", submitComplete.bind(this));
    formSubmit.open("POST", formAction, true);
    formSubmit.send(formData);

    function submitComplete () {
      var thankYou = this.parentNode.parentNode.getElementsByClassName('thank-you');
      this.classList.remove('submitting');
      this.classList.add('closed');
      thankYou[0].classList.remove('closed');
    }

  });

})();