var form = new Vue({
    el: '#form-usuario',
    data: {
        nombres: '',
        apellidos: '',
        rut: '',
        correo: '',
        perfil: '',
        attemptSubmit: false,
    },
    computed: {
        missingNombres: function () { return this.nombres === ''; },
        missingApellidos: function () { return this.apellidos === ''; },
        missingRut: function () { return this.rut === ''; },
        missingCorreo: function () { return this.correo === ''; },
        wrongRut: function () {},
    },
    methods: {
        validateForm: function (event) {
            console.log('Intento de mandar el form');
            this.attemptSubmit = true;
            if (this.missingNombres ||this.missingApellidos ||this.missingRut ||this.missingCorreo || this.wrongRut) event.preventDefault();
        },
    },
});