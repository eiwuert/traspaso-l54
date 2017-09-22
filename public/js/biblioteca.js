var App = new Vue({
	el: '#biblioteca',

	data: {
		bibliotecadata: []
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

			if(window.location.pathname == '/backend/actas/biblioteca'){
				this.$set('bibliotecadata',{'direccion': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/biblioteca/'+acta_id+'/edit').then((response) => {
					if(response.data.biblioteca[0])
						this.$set('bibliotecadata',response.data.biblioteca[0]);
					else
						this.$set('bibliotecadata',{'entrega': null});
	          	});
			}
		},
		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');
            var payload = {
            	biblioteca: this.bibliotecadata,
            	_token: token
            }
            var payload = JSON.stringify(payload);

			if(window.location.pathname == '/backend/actas/biblioteca'){
				this.$http.post('/backend/actas/biblioteca',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/biblioteca/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
        }
	}
});