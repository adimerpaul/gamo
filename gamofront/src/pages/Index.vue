<template>
  <q-page class="text-center bg-blue-grey-1">
    <div class="row">
      <div class="col-12 q-mt-sm">
        <img
          alt="Quasar logo"
          src="~assets/logo.png"
          style="width: 120px"
        >
      </div>
      <div class="col-12 q-mt-sm">
        <q-btn color="red-9" style="width: 350px" to="/tasas" icon="code" icon-right="send" label="Deudas tasas por servicio" />
      </div>
      <div class="col-12 q-mt-sm">
        <q-btn color="red-9" style="width: 350px" @click="vehiculo" icon="drive_eta" icon-right="send" label="Consultar Deudas Vehiculos" />
      </div>
      <div class="col-12 q-mt-sm">
        <q-btn color="red-9" style="width: 350px" @click="inmueble" icon="maps_home_work" icon-right="send" label="Consultar Deudas Inmuebles" />
      </div>
    </div>



  </q-page>
</template>

<script>
import { openURL } from 'quasar'
export default {
  name: 'PageIndex',
  created() {
    // console.log(process.env.URL)
  },
  data () {
    return{}
  },
   methods: {
     vehiculo(){
       openURL('https://www.ruat.gob.bo/vehiculos/consultageneral/InicioBusquedaVehiculo.jsf ');
     },
     inmueble(){
       openURL('https://www.ruat.gob.bo/inmuebles/consultageneral/InicioBusquedaInmueble.jsf');
     }
   }


}
</script>
