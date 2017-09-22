var App = new Vue({
	el: '#otro',

	data: {
		otrodata: [],
		archivos: [],
		loading: false
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

			if(window.location.pathname == '/backend/actas/otro'){
				this.$set('otrodata',{'direccion': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/otro/'+acta_id+'/edit').then((response) => {
					if(response.data.otro[0])
						this.$set('otrodata',response.data.otro[0]);
					else
						this.$set('otrodata',{'direccion': null});
					this.$set('archivos',response.data.archivos);
	          	});
			}
		},
		borrarArchivo: function(archivo) {
			var self = this;
			self.archivos.$remove(archivo);

			var token = $('meta[name="csrf-token"]').attr('content');
            var payload = {
            	archivo: archivo,
            	_token: token
            }
            var payload = JSON.stringify(payload);
			
			this.$http.put('/backend/actas/otro/'+archivo.id,payload)
            .then((response) => {
			    //window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
			}, (error) => {
				this.handleError(error);
		    });
		    

		},
		setData: function () {
            var self = this;
            var token = $('meta[name="csrf-token"]').attr('content');
            var payload = {
            	otro: this.otrodata,
            	archivos: this.archivos,
            	_token: token
            }
            var payload = JSON.stringify(payload);
            console.log(payload);

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
        	var self = this;
        	this.loading = true;
		    var formData = new FormData();
		    var token = $('meta[name="csrf-token"]').attr('content');
    		//formData.append('archivo', this.$els.fileinput.files[0]);
    		//formData.append('file', this.$els.fileinput.files[0]); OK para un archivo
    		// Para varios archivos el var y el for siguiente
    		var files = this.$els.fileinput.files;
			for(var key in files){
          		formData.append('archivos['+key+']', files[key]);
  			}
  			
    		formData.append('_token', token);
    		if(this.otrodata)
    			formData.append('otro', JSON.stringify(this.otrodata));
    		if(this.archivos)
    			formData.append('files', JSON.stringify(this.archivos));


    		
    		this.$http.post('/backend/actas/otro',formData)
            .then((response) => {
            	this.loading = false;
			    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
			}, (error) => {
				//this.handleError(error);
		    });

		},
		validateBeforeSubmit: function(e) {
	      	this.$validator.validateAll().then((result) => {
	        if (result) {
	          // eslint-disable-next-line
	          alert('From Submitted!');
	          return;
	        }

	        alert('Correct them errors!');
	      });
	    }
	}
});