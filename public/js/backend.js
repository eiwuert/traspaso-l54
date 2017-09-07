
var App = new Vue({
	el: '#gestion',

	data: {
		gestiondata: [],
		programas: [],
		comites: [],
		publicaciones: [],
		compromisos: [],
		licitaciones: []
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

			if(window.location.pathname == '/backend/actas/gestion'){
				this.$set('gestiondata',{'enlace_marco_normativo': null, 'enlace_definiciones_estrategicas':null, 'enlace_estructura_organica': null, 'enlace_compromisos_gestion': null, 'enlace_ejecucion_presupuestaria':null, 'balance_logros':null});
			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];

				this.$http.get('/backend/actas/gestion/'+acta_id+'/edit').then((response) => {
					if(response.data.gestion[0])
						this.$set('gestiondata',response.data.gestion[0]);
					else
						this.$set('gestiondata',{'enlace_marco_normativo': null, 'enlace_definiciones_estrategicas':null, 'enlace_estructura_organica': null, 'enlace_compromisos_gestion': null, 'enlace_ejecucion_presupuestaria':null, 'balance_logros':null});
	            	this.$set('programas', response.data.programas);
	            	this.$set('comites', response.data.comites);
	            	this.$set('publicaciones', response.data.publicaciones);
	            	this.$set('compromisos', response.data.compromisos);
	            	this.$set('licitaciones', response.data.licitaciones);
	          	});

			}
			
		},

		agregarPrograma: function() {
			var self = this;
			self.programas.push({"nombre": "","monto": "","etapa": ""});
		},

		agregarComite: function() {
			var self = this;
			self.comites.push({"nombre": "","calidad_participacion": ""});
		},

		agregarPublicacion: function() {
			var self = this;
			self.publicaciones.push({"nombre": "","monto": "","enlace_publicacion": ""});
		},

		agregarCompromiso: function() {
			var self = this;
			self.compromisos.push({"nombre": "","estado": ""});
		},

		agregarLicitacion: function() {
			var self = this;
			self.licitaciones.push({"nombre": "","calidad_participacion": ""});
		},

		borrarPrograma: function(programa) {
			var self = this;
			self.programas.$remove(programa);
		},

		borrarComite: function(comite) {
			var self = this;
			self.comites.$remove(comite);
		},

		borrarPublicacion: function(publicacion) {
			var self = this;
			self.publicaciones.$remove(publicacion);
		},

		borrarCompromiso: function(compromiso) {
			var self = this;
			self.compromisos.$remove(compromiso);
		},

		borrarLicitacion: function(licitacion) {
			var self = this;
			self.licitaciones.$remove(licitacion);
		},

		setData: function () {
            var self = this;
            var payload = {
            	programas: this.programas,
            	comites: this.comites,
            	publicaciones: this.publicaciones,
            	compromisos: this.compromisos,
            	licitaciones: this.licitaciones,
            	gestion: this.gestiondata
            }
            var payload = JSON.stringify(payload);

            console.log(payload);


			if(window.location.pathname == '/backend/actas/gestion'){

				this.$http.post('/backend/actas/gestion',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];

				this.$http.put('/backend/actas/gestion/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+this.gestiondata.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}

            


        }
	}
});