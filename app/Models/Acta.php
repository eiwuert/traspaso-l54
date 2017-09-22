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
        return $this->hasMany('App\Models\Gestion');
    }
    public function personal ()
    {
        return $this->hasMany('App\Models\Personal');
    }
    public function financiera ()
    {
        return $this->hasMany('App\Models\Financiera');
    }
    public function inventario ()
    {
        return $this->hasMany('App\Models\Inventario');
    }
    public function administrativa ()
    {
        return $this->hasMany('App\Models\Administrativa');
    }
    public function participacionCiudadana ()
    {
        return $this->hasMany('App\Models\ParticipacionCiudadana');
    }
    public function gestionProgramaProyecto ()
    {
        return $this->hasMany('App\Models\GestionProgramaProyecto');
    }
    public function gestionPublicaciones ()
    {
        return $this->hasMany('App\Models\GestionPublicacion');
    }
    public function gestionCompromisosInternacionales ()
    {
        return $this->hasMany('App\Models\GestionCompromisoInternacional');
    }
    public function personalNombramientos ()
    {
        return $this->hasMany('App\Models\PersonalNombramiento');
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
    public function inventarioVehiculos ()
    {
        return $this->hasMany('App\Models\InventarioVehiculo');
    }
     public function legalDocumentosTomaRazon ()
    {
        return $this->hasMany('App\Models\LegalDocumentoTomaRazon');
    }
    public function legalProyectosLeyTramitacion ()
    {
        return $this->hasMany('App\Models\LegalProyectoLeyTramitacion');
    }
    public function legal ()
    {
        return $this->hasMany('App\Models\Legal');
    }
    public function auditoria ()
    {
        return $this->hasMany('App\Models\Auditoria');
    }
    public function otroAntecedente ()
    {
        return $this->hasMany('App\Models\OtroAntecedente');
    }
    public function gestionComiteInterministerial ()
    {
        return $this->hasMany('App\Models\GestionComiteInterministerial');
    }
    public function gestionLicitacion ()
    {
        return $this->hasMany('App\Models\GestionLicitacion');
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
        return $this->hasMany('App\Models\InventarioMuebleInmueble');
    }
    public function inventarioProductoEmergencia ()
    {
        return $this->hasMany('App\Models\InventarioProductoEmergencia');
    }
    public function inventarioContrato ()
    {
        return $this->hasMany('App\Models\InventarioContrato');
    }
    public function legalJuicioPendiente ()
    {
        return $this->hasMany('App\Models\LegalJuicioPendiente');
    }
    public function legalSumarioInvestigacion ()
    {
        return $this->hasMany('App\Models\LegalSumarioInvestigacion');
    }
    public function legalRequerimientoRespuesta ()
    {
        return $this->hasMany('App\Models\LegalRequerimientoRespuesta');
    }
    public function inventarioEscritorio ()
    {
        return $this->hasMany('App\Models\InventarioEscritorio');
    }
    public function administrativaDocumento ()
    {
        return $this->hasMany('App\Models\AdministrativaDocumento');
    }
    public function otroAntecedenteArchivo ()
    {
        return $this->hasMany('App\Models\OtroAntecedenteArchivo');
    }
    public function biblioteca ()
    {
        return $this->hasMany('App\Models\Biblioteca');
    }


}
