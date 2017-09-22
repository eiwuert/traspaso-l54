var App = new Vue({
	el: '#participacion',

	data: {
		participaciondata: []
	},

	ready: function() {
		this.loading = false;
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

			if(window.location.pathname == '/backend/actas/participacion'){
				this.$set('participaciondata',{'enlace_participacion_ciudadana': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/participacion/'+acta_id+'/edit').then((response) => {
					if(response.data.participacion[0])
						this.$set('participaciondata',response.data.participacion[0]);
					else
						this.$set('participaciondata',{'enlace_participacion_ciudadana': null});
	          	});
			}
		},
		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');
            var payload = {
            	participacion: this.participaciondata,
            	_token: token
            }
            var payload = JSON.stringify(payload);
            console.log(payload);
			if(window.location.pathname == '/backend/actas/participacion'){
				this.$http.post('/backend/actas/participacion',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/participacion/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
        }
	}
});