
var App = new Vue({
	el: '#administrativa',

	data: {
		administrativadata: [],
		documentos: []
	},

	ready: function() {
		var self = this;
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

			if(window.location.pathname == '/backend/actas/administrativa'){
				this.$set('administrativadata',{'enlace_actos': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/administrativa/'+acta_id+'/edit').then((response) => {
					if(response.data.administrativa[0])
						this.$set('administrativadata',response.data.administrativa[0]);
					else
						this.$set('administrativadata',{'enlace_actos': null});
	            	this.$set('documentos',response.data.documentos);
	          	});
			}
		},

		agregarDocumento: function() {
			var self = this;
			self.documentos.push({"nombre_documento": "","fecha_ingreso": "","estado": ""});
		},

		borrarDocumento: function(documento) {
			var self = this;
			self.documentos.$remove(documento);
		},

		setData: function () {

            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');

            var payload = {
            	administrativa: this.administrativadata,
            	documentos: this.documentos,
            	_token: token
            }
            var payload = JSON.stringify(payload);
			if(window.location.pathname == '/backend/actas/administrativa'){
				this.$http.post('/backend/actas/administrativa',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/administrativa/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
			
			
        }
	}
});