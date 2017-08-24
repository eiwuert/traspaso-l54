
var App = new Vue({
	el: '#personal',

	data: {
		personaldata: [],
		nombramientos: []
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

			if(window.location.pathname == '/backend/actas/personal'){
				this.$set('personaldata',{'enlace_dotacion_personal': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/personal/'+acta_id+'/edit').then((response) => {
					this.$set('personaldata',response.data.personal[0]);
	            	this.$set('nombramientos',response.data.nombramientos);
	          	});
			}
		},

		agregarNombramiento: function() {
			var self = this;
			self.nombramientos.push({"tipo": "","total_proceso_promocion": "","total_proceso_nombramiento": ""});
		},

		borrarNombramiento: function(nombramiento) {
			var self = this;
			self.nombramientos.$remove(nombramiento);
		},

		setData: function () {
            var self = this;
            var payload = {
            	nombramientos: this.nombramientos,
            	personal: this.personaldata
            }
            var payload = JSON.stringify(payload);

			if(window.location.pathname == '/backend/actas/personal'){
				this.$http.post('/backend/actas/personal',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/personal/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+this.personaldata.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
			
        }
	}
});