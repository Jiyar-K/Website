new Vue({
  el: '#app',
  data: {
    name: '',
    lastname: '',
    email: '',
    phoneNumber: '',
    emailError: '',
    phoneError: ''
  },
  methods: {
    clearForm() {
      this.name = '';
      this.lastname = '',
      this.email = '';
      this.phoneNumber = '';
      this.emailError = '';
      this.phoneError = '';
    },
    validatePhoneNumber(number) {
      return /^\d{10}$/.test(number);
    },
    validateEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    },
    submitForm() {
      this.emailError = '';
      this.phoneError = '';

      if (!this.validatePhoneNumber(this.phoneNumber)) {
        this.phoneError = 'Please enter a valid 10-digit phone number.';
        return;
      }

      if (!this.validateEmail(this.email)) {
        this.emailError = 'Please enter a valid email address.';
        return;
      }
      window.location.href = 'submitted.html?name=' + encodeURIComponent(this.name) + '&email=' + encodeURIComponent(this.email) + '&phoneNumber=' + encodeURIComponent(this.phoneNumber) + '&hometown=' + encodeURIComponent(this.hometown);
    }
  }
});
