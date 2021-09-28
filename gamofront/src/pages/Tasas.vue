<template>
  <q-page class="text-center bg-blue-grey-1">
    <div class="row">
      <div class="col-12 q-mt-sm q-px-md">
        <h3 class="text-h6 text-weight-bolder">CONSULTA</h3>
        <!--        <div class="q-pa-md" >-->
        <!--          <q-input-->
        <!--            ref="input"-->
        <!--            filled-->
        <!--            v-model="carnet"-->
        <!--            label="Carnet de identidad"-->
        <!--            :rules="[val => !!val || 'Este campo es requerido']"-->
        <!--          />-->
        <!--        </div>-->
        <form @submit.prevent="simulateSubmit" class="q-pb-xs">
          <!-- a simple text field watching for the enter key release -->
          <q-input
            filled
            @keyup.enter="simulateSubmit"
            color="teal"
            label="Carnet de identidad"
            hint="Porfavor colocar su carnet de identidad"
            :rules="[val => !!val || 'Este campo es requerido',val => val.length>5  || 'Debe ser mayor a 5 digitos']"
            v-model="numinmueble"
            required
          />

          <!--
            A button with v-model set to submit.
            v-model scope variable must be a strict Boolean
          -->
          <div class="row justify-end">
            <q-btn
              type="submit"
              round
              :loading="submitting"
              icon="send"
              class="q-mt-md"
              color="teal"
            >
              <template v-slot:loading>
                <q-spinner-facebook />
              </template>
            </q-btn>
          </div>
        </form>
        <q-table
          v-if="table"
          :title=total
          :rows="data"
          :columns="columns"
          row-key="name"
        >
          <template v-slot:body="props">
            <q-tr :props="props">
              <q-td key="numinmueble" :props="props">
                {{ props.row.numinmueble }}
              </q-td>
              <q-td key="direccion" :props="props">
                {{ props.row.direccion }}
              </q-td>
              <q-td key="gestion" :props="props">
<!--                {{ props.row.gestion }}-{{anio}}-->
                <q-badge :color="props.row.gestion==anio?'positive':'negative'" :label="props.row.gestion"/>
              </q-td>
              <q-td key="estado" :props="props">
                <q-badge :color="props.row.gestion==anio?'positive':'negative'" :label="props.row.gestion==anio?'No tiene deudas':'El inmueble tiene deudas dudas y consultas 69603027'"/>
              </q-td>
            </q-tr>
          </template>
        </q-table>
        <q-banner v-if="banner" class="bg-primary text-white">
          No tiene Inmuebles registrados a ese carnet
          dudas y consultas 69603027
        </q-banner>
      </div>
    </div>


  </q-page>
</template>

<script>
// import { api } from 'boot/axios'
import {date} from 'quasar'
export default {
  name: 'PageIndex',
  created() {
    // console.log(process.env.URL)
  },
  data () {
    return {
      anio:date.formatDate(Date.now(),'YYYY')-1,
      numinmueble:'',//1024043
      table:false,
      banner:false,
      test: '',
      submitting: false,
      columns: [
        {name: 'numinmueble', required: true, label: 'Numero de inmueble', align: 'left', field: row => row.numinmueble, // format: val => `${val}`,sortable: true
        },
        {name: 'direccion', required: true, label: 'Direccion', align: 'center', field: row => row.direccion, // format: val => `${val}`,sortable: true
        },
        {name: 'gestion', required: true, label: 'Gestion', align: 'right', field: row => row.gestion, // format: val => `${val}`,sortable: true
        },
        {name: 'estado', required: true, label: 'Estado', align: 'right', field: row => row.estado, // format: val => `${val}`,sortable: true
        },
        // { name: 'calories', align: 'center', label: 'Calories', field: 'calories', sortable: true },
        // { name: 'fat', label: 'Fat (g)', field: 'fat', sortable: true },
        // { name: 'carbs', label: 'Carbs (g)', field: 'carbs' },
        // { name: 'protein', label: 'Protein (g)', field: 'protein' },
        // { name: 'sodium', label: 'Sodium (mg)', field: 'sodium' },
        // { name: 'calcium', label: 'Calcium (%)', field: 'calcium', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) },
        // { name: 'iron', label: 'Iron (%)', field: 'iron', sortable: true, sort: (a, b) => parseInt(a, 10) - parseInt(b, 10) }
      ],
      data: [
        {gestion: 2018, concepto: 'TASAS', monto: 6.0,},
        {gestion: 2019, concepto: 'TASAS', monto: 100.0,},
        {gestion: 2020, concepto: 'TASAS', monto: 120.0,},
      ]
    }
  },
  methods: {
    simulateSubmit () {
      this.table=false;
      this.banner=false;
      this.submitting = true
      // Simulating a delay here.
      // When we are done, we reset "submitting"
      // Boolean to false to restore the
      // initial state.
      // setTimeout(() => {
      //   // delay simulated, we are done,
      //   // now restoring submit to its initial state
      //   this.submitting = false;
      //   this.table=true;
      // }, 3000)
      this.data=[];
      this.$q.loading.show()
      // this.$q.loading.hide()
      // console.log(process.env.API+'/inmueble')
      // return false;
      this.$axios.post(process.env.API+'/inmueble',{comun:this.numinmueble}).then((res) => {
          // console.log(res.data)
        this.$q.loading.hide()
          // this.data = response.data
          // console.log(response.data);
          if (res.data.length>0){
            res.data.forEach(r=>{
              console.log(r);
              // r.forEach(r=>{
                // console.log(r);
                this.data.push({
                  numinmueble: r.cantidad,
                  direccion: r.descrip,
                  gestion: r.gestion,
                  estado: '',
                })
              })
            this.table=true;
            // console.log(this.data)
            // })
          }else{
            this.banner=true;

          }

          this.submitting = false;
        })
        .catch(err => {
          this.table=false;
          this.submitting = false;
          this.$q.notify({
            color: 'negative',
            position: 'top',
            message: 'Su conexion a internet es inestable',
            icon: 'report_problem'
          })
        })
    }
  },
  computed:{
    total: function(){
      // var sum = 0;
      // this.data.forEach(e => {
      //   sum += parseFloat(e.monto);
      // });
      return 'Inmuebles registrados '+ this.data.length
    }
  }
}
</script>
