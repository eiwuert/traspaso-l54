
var App = new Vue({
	el: '#Auditoria',

	data: {
		auditoriadata: [],
		documentos: [],
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

			if(window.location.pathname == '/backend/actas/auditoria'){
				this.$set('auditoriadata', null);
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/auditoria/'+acta_id+'/edit').then((response) => {
					this.$set('auditoriadata',response.data.legal[0]);
	            	this.$set('resoluciones', response.data.resoluciones);

			}
			
		},
		/*agregarDocumento: function() {
			var self = this;
			self.documentos.push({"archivo": ""});
		},

		

		borrarDocumento: function(documento) {
			var self = this;
			self.documentos.$remove(documento);
		},*/


		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');

            var payload = {
            	documentos: this.documentos,

            	_token: token
            }
            var payload = JSON.stringify(payload);

            console.log(payload);


			if(window.location.pathname == '/backend/actas/auditoria'){

				this.$http.post('/backend/actas/auditoria',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}
			else{

				var acta_id = window.location.pathname.match( /\d+/g )[0];
				console.log(acta_id);

				this.$http.put('/backend/actas/auditoria/'+acta_id,payload)
	            .then((response) => {
	            	console.log(this.response);
				    window.location.replace('/backend/actas/iniciar/'+this.auditoriadata.acta_id)

				}, (error) => {
					this.handleError(error);
			    });

			}

        }
	}
});