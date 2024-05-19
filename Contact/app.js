new Vue({
  el: '#app',
  data: {
    name: '',
    lastname: '',
    email: '',
    phoneNumber: '',
    message: '',
    nameError: '',
    lastnameError: '',
    emailError: '',
    phoneError: '',
    messageError: ''
  },
  methods: {
    clearForm() {
      this.name = '';
      this.lastname = '';
      this.email = '';
      this.phoneNumber = '';
      this.message = '';
      this.nameError = '';
      this.lastnameError = '';
      this.emailError = '';
      this.phoneError = '';
      this.messageError = '';
    
    },
    
    validatePhoneNumber(number) {
      return /^\d{10}$/.test(number);
    },
    validateEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    },
    submitForm() {
      this.nameError = '';
      this.lastnameError = '';
      this.emailError = '';
      this.phoneError = '';
      this.messageError = '';
      

      if (!this.name) {
        this.nameError = 'Please enter your first name.';
      }

      if (!this.lastname) {
        this.lastnameError = 'Please enter your last name.';
      }

      if (!this.email) {
        this.emailError = 'Please enter your email address.';
      } else if (!this.validateEmail(this.email)) {
        this.emailError = 'Please enter a valid email address.';
      }

      if (!this.phoneNumber) {
        this.phoneError = 'Please enter your phone number.';
      } else if (!this.validatePhoneNumber(this.phoneNumber)) {
        this.phoneError = 'Please enter a valid 10-digit phone number.';
      }

      if (!this.message) {
        this.messageError = 'Please enter your message.';
      }

      if (!this.nameError && !this.lastnameError && !this.emailError && !this.phoneError && !this.messageError) {
        window.location.href = 'submitted.html?name=' + encodeURIComponent(this.name) + '&lastname=' + encodeURIComponent(this.lastname) + '&email=' + encodeURIComponent(this.email) + '&phoneNumber=' + encodeURIComponent(this.phoneNumber) + '&message=' + encodeURIComponent(this.message);
      }
    }
  }
});