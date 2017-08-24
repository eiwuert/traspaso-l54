
var App = new Vue({
	el: '#inventario',

	data: {
		inventariodata: [],
		contratos: [],
		escritorios: [],
		mueblesinmuebles: [],
		productos: [],
		vehiculos: []
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

			if(window.location.pathname == '/backend/actas/inventario'){
				//this.$set('inventariodata',{'enlace_dotacion_inventario': null});
			}
			else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.get('/backend/actas/inventario/'+acta_id+'/edit').then((response) => {
					this.$set('inventariodata',response.data.inventario[0]);
					this.$set('mueblesinmuebles',response.data.mueblesinmuebles);
	            	this.$set('vehiculos',response.data.vehiculos);
	            	this.$set('escritorios',response.data.escritorios);
	            	this.$set('productos',response.data.productos);
	            	this.$set('contratos',response.data.contratos);
	          	});
			}
		},

		agregarMueble: function() {
			var self = this;
			self.mueblesinmuebles.push({"tipo_activo": "","unidades": ""});
		},

		borrarMueble: function(mueble) {
			var self = this;
			self.mueblesinmuebles.$remove(mueble);
		},

		agregarVehiculo: function() {
			var self = this;
			self.vehiculos.push({"identificacion_especie": "","patente": "","condicion_juridica": "","condicion_fisica": "","destinacion": ""});
		},

		borrarVehiculo: function(vehiculo) {
			var self = this;
			self.vehiculos.$remove(vehiculo);
		},

		agregarEscritorio: function() {
			var self = this;
			self.escritorios.push({"identificacion_especie": "","unidades": "","monto": ""});
		},

		borrarEscritorio: function(escritorio) {
			var self = this;
			self.escritorios.$remove(escritorio);
		},

		agregarProducto: function() {
			var self = this;
			self.productos.push({"identificacion_especie": "","unidades": ""});
		},

		borrarProducto: function(producto) {
			var self = this;
			self.productos.$remove(producto);
		},

		agregarContrato: function() {
			var self = this;
			self.contratos.push({"clasificacion_contratos": "","numero_contratos": "","monto_mensual": ""});
		},

		borrarContrato: function(contrato) {
			var self = this;
			self.contratos.$remove(contrato);
		},

		setData: function () {
            var self = this;
            var payload = {
            	inventario: this.inventariodata,
            	muebles: this.mueblesinmuebles,
            	vehiculos: this.vehiculos,
            	escritorios: this.escritorios,
            	productos: this.productos,
            	contratos: this.contratos
            }
            var payload = JSON.stringify(payload);
			if(window.location.pathname == '/backend/actas/inventario'){
				this.$http.post('/backend/actas/inventario',payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+response.data.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}else{
				var acta_id = window.location.pathname.match( /\d+/g )[0];
				this.$http.put('/backend/actas/inventario/'+acta_id,payload)
	            .then((response) => {
				    window.location.replace('/backend/actas/iniciar/'+this.inventariodata.acta_id)
				}, (error) => {
					this.handleError(error);
			    });
			}
        }
	},
	computed: {
        totalContratos: function () {
          	 var total = 0;
          	 this.contratos.forEach(function (contrato) {
          	 	if(contrato.numero_contratos)
             		total += parseInt(contrato.numero_contratos);
             });
             return total;
          },
        totalMontos: function () {
          	 var total = 0;
          	 this.contratos.forEach(function (contrato) {
          	 	if(contrato.monto_mensual)
             		total += parseInt(contrato.monto_mensual);
             });
             return total;
          }
    }
    
        
});