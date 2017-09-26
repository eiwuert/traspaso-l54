
var App = new Vue({
	el: '#auditoria',

	data: {
		actadata: [],
		auditoriadata: [],
		archivo: []
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
			console.log('fetchData');
			var self = this;

			if(window.location.pathname == '/backend/actas/auditoria'){
				this.$set('auditoriadata',null);
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/auditoria/'+acta_id+'/edit').then((response) => {
					console.log(response);
					this.$set('auditoriadata',response.data.auditoria);
					this.$set('archivo',response.data.archivo);
					this.$set('actadata',response.data.acta);
	          	});
	          	console.log('acta data: '+this.actadata);
			}
		},


        onSubmitForm: function(e) {

        	console.log('onSubmitForm');
		    var formData = new FormData();
		    var token = $('meta[name="csrf-token"]').attr('content');
		    console.log(token);
    		formData.append('archivo', this.$els.fileinput.files[0]);

    		formData.append('_token', token);

    		
			if(this.actadata)
    			formData.append('acta', JSON.stringify(this.actadata));
    		if(this.auditoriadata)
    			formData.append('auditoria', JSON.stringify(this.auditoriadata));

    		for (var pair of formData.entries())
			{
			 console.log(pair[0]+ ', '+ pair[1]); 
			}
			this.$http.post('/backend/actas/auditoria',formData)
            .then((response) => {
            	console.log(response);
			    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
			}, (error) => {
				this.handleError(error);
		    });

    		
		},


		descargar: function(e) {
        	console.log('descargar');
        	var acta_id = window.location.pathname.match( /\d+/g )[0];
        	this.$http.get('/backend/actas/auditoria-descargar/'+acta_id)
	            .then((response) => {
				    //window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					//this.handleError(error);
			    });
    		
		}

	}
});