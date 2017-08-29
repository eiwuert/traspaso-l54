<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Acta extends Model  {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'actas';

	public function gestion ()
    {
        return $this->hasMany('Gestion');
    }
    public function personal ()
    {
        return $this->hasMany('Personal');
    }
    public function financiera ()
    {
        return $this->hasMany('App\Models\Financiera');
    }
    public function inventario ()
    {
        return $this->hasMany('Inventario');
    }
    public function administrativa ()
    {
        return $this->hasMany('Administrativa');
    }
    public function participacionCiudadana ()
    {
        return $this->hasMany('ParticipacionCiudadana');
    }
    public function gestionProgramaProyecto ()
    {
        return $this->hasMany('GestionProgramaProyecto');
    }
    public function gestionPublicaciones ()
    {
        return $this->hasMany('GestionPublicacion');
    }
    public function gestionCompromisosInternacionales ()
    {
        return $this->hasMany('GestionCompromisoInternacional');
    }
    public function personalNombramientos ()
    {
        return $this->hasMany('PersonalNombramiento');
    }
    public function financieraFuncionarios ()
    {
        return $this->hasMany('App\Models\FinancieraFuncionario');
    }
    public function FinancieraConciliacionesBancarias ()
    {
        return $this->hasMany('App\Models\FinancieraConciliacionBancaria');
    }
    public function FinancieraActivos ()
    {
        return $this->hasMany('App\Models\FinancieraActivo');
    }
    public function FinancieraAnticiposFondos ()
    {
        return $this->hasMany('App\Models\FinancieraAnticipoFondo');
    }
    public function iventarioVehiculos ()
    {
        return $this->hasMany('IventarioVehiculo');
    }
     public function legalDocumentosTomaRazon ()
    {
        return $this->hasMany('LegalDocumentoTomaRazon');
    }
    public function legalProyectosLeyTramitacion ()
    {
        return $this->hasMany('LegalProyectoLeyTramitacion');
    }
    public function legal ()
    {
        return $this->hasMany('Legal');
    }
    public function auditoria ()
    {
        return $this->hasMany('Auditoria');
    }
    public function otroAntecedente ()
    {
        return $this->hasMany('OtrosAntecedentes');
    }
    public function gestionComiteInterministerial ()
    {
        return $this->hasMany('GestionComiteInterministerial');
    }
    public function gestionLicitacion ()
    {
        return $this->hasMany('GestionLicitacion');
    }
    public function financieraCuentaCorriente ()
    {
        return $this->hasMany('App\Models\FinancieraCuentaCorriente');
    }
    public function financieraInternoRendir ()
    {
        return $this->hasMany('App\Models\FinancieraInternoRendir');
    }
    public function inventarioMuebleInmueble ()
    {
        return $this->hasMany('InventarioMuebleInmueble');
    }
    public function inventarioProductoEmergencia ()
    {
        return $this->hasMany('InventarioProductoEmergencia');
    }
    public function inventarioContrato ()
    {
        return $this->hasMany('InventarioContrato');
    }
    public function legalJuicioPendiente ()
    {
        return $this->hasMany('LegalJuicioPendiente');
    }
    public function legalSumarioInvestigacion ()
    {
        return $this->hasMany('LegalSumarioInvestigacion');
    }
    public function legalRequerimientoRespuesta ()
    {
        return $this->hasMany('LegalRequerimientoRespuesta');
    }
    public function inventarioEscritorio ()
    {
        return $this->hasMany('InventarioEscritorio');
    }
    public function administrativaDocumento ()
    {
        return $this->hasMany('AdministrativaDocumento');
    }


}
