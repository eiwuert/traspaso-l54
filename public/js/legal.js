
var App = new Vue({
	el: '#legal',

	components: {
      vSelect: VueStrap.select,
      datepicker: VueStrap.datepicker
    },

	data: {
		legaldata: [],
		documentos: [],
		proyectos: [],
		juicios: [],
		sumarios: [],
		requerimientos: [],
		disabled : [],
    	format: 'yy-MM-dd',
    	clear: true,
	},
	watch: {
    	disabled () {
    		console.log('disabled');
	    	this.$refs.dp.getDateRange()
	    },
	    format (newV) {
	    	console.log('format');
	    	this.value = this.$refs.dp.stringify()
	    }
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

			if(window.location.pathname == '/backend/actas/legal'){
				this.$set('legaldata', null);
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/legal/'+acta_id+'/edit').then((response) => {
					this.$set('legaldata',response.data.legal[0]);
	            	this.$set('documentos', response.data.documentos);
	            	this.$set('proyectos', response.data.proyectos);
	            	this.$set('juicios', response.data.juicios);
	            	this.$set('sumarios', response.data.sumarios);
	            	this.$set('requerimientos', response.data.requerimientos);
	          	});

			}
			
		},
		agregarDocumento: function() {
			var self = this;
			self.documentos.push({"nombre": "","fecha_ingreso": "","estado": ""});
		},

		agregarProyecto: function() {
			var self = this;
			self.proyectos.push({"nombre": "","fecha_ingreso": "", "estado": ""});
		},

		agregarJuicio: function() {
			var self = this;
			self.juicios.push({"materia": "","numero_causa": "","anio": "","tribunal": "","sede": "","naturaleza": "","instancia": ""});
		},

		agregarSumario: function() {
			var self = this;
			self.sumarios.push({"tipo": "","numero_resolucion": "", "fecha_resolucion": "", "estado_proceso": "" });
		},

		agregarRequerimiento: function() {
			var self = this;
			self.requerimientos.push({"institucion": "","identificacion_documento": "", "fecha_documento": "", "materia": "", "estado": ""});
		},

		

		borrarDocumento: function(documento) {
			var self = this;
			self.documentos.$remove(documento);
		},

		borrarProyecto: function(proyecto) {
			var self = this;
			self.proyectos.$remove(proyecto);
		},

		borrarJuicio: function(juicio) {
			var self = this;
			self.juicios.$remove(juicio);
		},

		borrarSumario: function(sumario) {
			var self = this;
			self.sumarios.$remove(sumario);
		},

		borrarRequerimiento: function(requerimiento) {
			var self = this;
			self.requerimientos.$remove(requerimiento);
		},

		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');

            var payload = {
            	documentos: this.documentos,
            	proyectos: this.proyectos,
            	juicios: this.juicios,
            	sumarios: this.sumarios,
            	requerimientos: this.requerimientos,
            	legal: this.legaldata,
            	_token: token
            }
            var payload = JSON.stringify(payload);

            console.log(payload);


			if(window.location.pathname == '/backend/actas/legal'){

				this.$http.post('/backend/actas/legal',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];
				console.log(acta_id);

				this.$http.put('/backend/actas/legal/'+acta_id,payload)
	            .then((response) => {
	            	console.log(this.response);
				    window.location.replace('/backend/actas/iniciar/'+this.legaldata.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}

            


        }
	}
});