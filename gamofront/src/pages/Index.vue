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
      <div class="col-12">
        <q-btn color="red-10" to="/tasas" icon="code" icon-right="send" label="Deudas tasas por servicio" />
      </div>
      <div class="col-12">
        <q-btn color="green-10" @click="vehiculo"  icon-right="send" label="Ir a consultar Deudas Ruat Vehiculos" />
      </div>
      <div class="col-12">
        <q-btn color="green-10" @click="inmueble"  icon-right="send" label=" Ir a consultar Deudas Ruat Inmuebles" />
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
