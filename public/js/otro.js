var App = new Vue({
	el: '#otro',

	data: {
		otrodata: [],
		archivos: []
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

			if(window.location.pathname == '/backend/actas/otro'){
				this.$set('otrodata',{'direccion': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/otro/'+acta_id+'/edit').then((response) => {
					this.$set('otrodata',response.data.otro[0]);
					this.$set('archivos',response.data.archivos);
	          	});
			}
		},
		borrarArchivo: function(archivo) {
			var self = this;
			self.archivos.$remove(archivo);
		},
		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');
            var payload = {
            	otro: this.otrodata,
            	_token: token
            }
            var payload = JSON.stringify(payload);
			if(window.location.pathname == '/backend/actas/otro'){
				this.$http.post('/backend/actas/otro',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/otro/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
        },
        onSubmitForm: function(e) {
		    var formData = new FormData();
		    var token = $('meta[name="csrf-token"]').attr('content');
    		formData.append('archivo', this.$els.fileinput.files[0]);
    		formData.append('_token', token);
    		this.$http.post('/backend/actas/otro',formData)
            .then((response) => {
			    //window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
			}, (error) => {
				//this.handleError(error);
		    });
		    //this.Categories.push(category);
		    //this.$http.post(this.link,input);
		}
	}
});