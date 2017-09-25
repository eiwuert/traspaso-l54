
var App = new Vue({
	el: '#financiera',

	data: {
		financieradata: [],
		activos: [],
		anticipos: [],
		conciliaciones: [],
		cuentas: [],
		internos: [],
		cuentadante: 0
	},

	ready: function() {
		var self = this;

		// this.option = window.varname;
		self.fetchData();
	},

	methods: {

		disabledInput: function() {
			for(var i=0; i < this.options.length; i++){
				if(this.options[i].name == ""){
					$($(".selectize-control input")[i]).attr("disabled",true);
				}
				else{
					$($(".selectize-control input")[i]).attr("disabled",false);
				}
			}
		},
		fetchData: function() {
			var self = this;

			if(window.location.pathname == '/backend/actas/financiera'){
				this.$set('financieradata',null);
			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];

				this.$http.get('/backend/actas/financiera/'+acta_id+'/edit').then((response) => {
					this.$set('financieradata',response.data.financiera[0]);
	            	this.$set('activos', response.data.activos);
	            	this.$set('anticipos', response.data.anticipos);
	            	this.$set('conciliaciones', response.data.conciliaciones);
	            	this.$set('cuentas', response.data.cuentas);
	            	this.$set('internos', response.data.internos);
	            	this.$set('cuentadante', response.data.internos.length);
	            	console.log(response.data.internos.length);
	          	});

			}
			
		},
		agregarActivo: function() {
			var self = this;
			self.activos.push({"nombre": "","detalle": "","monto": "", "plazo": ""});
		},

		agregarAnticipo: function() {
			var self = this;
			self.anticipos.push({"anticipos_concedidos": "","numero_beneficiarios": "", "monto": ""});
		},

		agregarCuenta: function() {
			var self = this;
			self.cuentas.push({"numero_cuenta_corriente": "","nombre_banco": "","numero_personas": ""});
		},

		agregarConciliacion: function() {
			var self = this;
			self.conciliaciones.push({"numero_cuenta_corriente": "","saldo_contable": "", "saldo_banco_cartola": "", "depositos_no_registrados": "", "giros_no_registrados": "", "saldo_banco_contable": "" });
		},

		

		agregarInterno: function() {
			var self = this;
			self.cuentadante++;
			self.internos.push({"fondo_interno": "Cargo del cuentadante "+self.cuentadante,"monto_autorizado": "", "monto_gastado": "", "detalle_gastado": "", "observaciones": ""});
			
		},

		

		borrarCuenta: function(cuenta) {
			var self = this;
			self.cuentas.$remove(cuenta);
		},

		borrarConciliacion: function(conciliacion) {
			var self = this;
			self.conciliaciones.$remove(conciliacion);
		},

		borrarActivo: function(activo) {
			var self = this;
			self.activos.$remove(activo);
		},

		borrarInterno: function(interno) {
			var self = this;
			self.internos.$remove(interno);
			self.cuentadante--;
		},

		borrarAnticipo: function(anticipo) {
			var self = this;
			self.anticipos.$remove(anticipo);
		},

		setData: function () {
            var self = this;

            var token = $('meta[name="csrf-token"]').attr('content');

            var formData = new FormData();
  			
    		formData.append('_token', token);

    		formData.append('financiera', JSON.stringify(this.financieradata));
    		formData.append('archivo', this.$els.fileinput.files[0]);
            formData.append('cuentas', JSON.stringify(this.cuentas));
            formData.append('conciliaciones', JSON.stringify(this.conciliaciones));
            formData.append('activos', JSON.stringify(this.activos));
            formData.append('internos', JSON.stringify(this.internos));
            formData.append('anticipos', JSON.stringify(this.anticipos));

            for (var pair of formData.entries())
			{
			 console.log(pair[0]+ ', '+ pair[1]); 
			}
    		
    		this.$http.post('/backend/actas/financiera',formData)
            .then((response) => {
            	this.loading = false;
			    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
			}, (error) => {
				//this.handleError(error);
		    });            


        }
	}
});