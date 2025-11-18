// Set minimum date for schedule date to current date
    document.addEventListener('DOMContentLoaded', function () {
      const today = new Date().toISOString().split('T')[0];
      document.getElementById('schedDate').setAttribute('min', today);
    });

    // Example form validation for schedule form
    document.getElementById('scheduleForm').addEventListener('submit', function(event){
      if (!this.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        this.classList.add('was-validated');
      }
    }, false);

    // Example form validation for pledge form
    document.getElementById('pledgeForm').addEventListener('submit', function(event){
      if (!this.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        this.classList.add('was-validated');
      }
    }, false);
