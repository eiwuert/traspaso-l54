
var App = new Vue({
	el: '#financiera',

	data: {
		financieradata: [],
		activos: [],
		anticipos: [],
		conciliaciones: [],
		cuentas: [],
		internos: []
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
				this.$set('financieradata',{'enlace_informe_contabilidad': null});
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
			self.internos.push({"fondo_interno": "","monto_autorizado": "", "monto_gastado": "", "detalle_gastado": "", "observaciones": ""});
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
		},

		borrarAnticipo: function(anticipo) {
			var self = this;
			self.anticipos.$remove(anticipo);
		},

		setData: function () {
            var self = this;
            var payload = {
            	cuentas: this.cuentas,
            	conciliaciones: this.conciliaciones,
            	activos: this.activos,
            	internos: this.internos,
            	anticipos: this.anticipos,
            	financiera: this.financieradata
            }
            var payload = JSON.stringify(payload);

            console.log(payload);


			if(window.location.pathname == '/backend/actas/financiera'){

				this.$http.post('/backend/actas/financiera',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];

				this.$http.put('/backend/actas/financiera/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+this.financieradata.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}

            


        }
	}
});