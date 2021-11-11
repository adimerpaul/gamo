<template>
  <q-layout view="lHh Lpr lFf">
    <q-header >
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="leftDrawerOpen = !leftDrawerOpen"
        />

        <!--        <q-toolbar-title>-->
        <!--          Inicio-->
        <!--        </q-toolbar-title>-->
        <!--        <div>Quasar v{{ $q.version }}</div>-->
      </q-toolbar>
      <div class="q-px-lg q-pt-xl q-mb-md">
        <div class="text-h3">G.A.M.O.</div>
        <div class="text-subtitle1">{{now}} </div>
      </div>
      <q-img
        src="~assets/gamo.jpg"
        class="header-image absolute-top"
      />
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      :width="200"
      :breakpoint="600"
    >
      <q-scroll-area style="height: calc(100% - 192px); margin-top: 192px; border-right: 1px solid #ddd">
        <q-list bordered>
          <q-item to="/" exact clickable v-ripple>
            <q-item-section avatar>
              <q-icon name="home" />
            </q-item-section>
            <q-item-section>
              <q-item-label> Principal</q-item-label>
              <q-item-label caption>Menu de consulta</q-item-label>
            </q-item-section>
          </q-item>

          <q-item to="/tasas" exact clickable v-ripple>
            <q-item-section avatar>
              <q-icon name="code" />
            </q-item-section>
            <q-item-section>
              <q-item-label> Tasa</q-item-label>
              <q-item-label caption>Consulta de tasas y servicios</q-item-label>
            </q-item-section>
          </q-item>
                    <q-item to="/mercado" exact clickable v-ripple>
            <q-item-section avatar>
              <q-icon name="storefront" />
            </q-item-section>
            <q-item-section>
              <q-item-label> Mercados</q-item-label>
              <q-item-label caption>Consulta de mercados </q-item-label>
            </q-item-section>
          </q-item>
          
          <q-item to="/actividad" exact clickable v-ripple>
            <q-item-section avatar>
              <q-icon name="store" />
            </q-item-section>
            <q-item-section>
              <q-item-label> Actividad Ec</q-item-label>
              <q-item-label caption>Consulta de Actividad Economica</q-item-label>
            </q-item-section>
          </q-item>
          <!--          <q-item to="/" exact clickable v-ripple>-->
          <!--            <q-item-section avatar>-->
          <!--              <q-icon name="home" />-->
          <!--            </q-item-section>-->
          <!--            <q-item-section>-->
          <!--              Home-->
          <!--            </q-item-section>-->
          <!--          </q-item>-->
          <!--          <q-item to="/tasas" exact clickable v-ripple>-->
          <!--            <q-item-section avatar>-->
          <!--              <q-icon name="code" />-->
          <!--            </q-item-section>-->
          <!--            <q-item-section>-->
          <!--              Tasas-->
          <!--            </q-item-section>-->
          <!--          </q-item>-->

          <!--          <q-item active clickable v-ripple>-->
          <!--            <q-item-section avatar>-->
          <!--              <q-icon name="star" />-->
          <!--            </q-item-section>-->

          <!--            <q-item-section>-->
          <!--              Star-->
          <!--            </q-item-section>-->
          <!--          </q-item>-->

          <!--          <q-item clickable v-ripple>-->
          <!--            <q-item-section avatar>-->
          <!--              <q-icon name="send" />-->
          <!--            </q-item-section>-->

          <!--            <q-item-section>-->
          <!--              Send-->
          <!--            </q-item-section>-->
          <!--          </q-item>-->

          <!--          <q-item clickable v-ripple>-->
          <!--            <q-item-section avatar>-->
          <!--              <q-icon name="drafts" />-->
          <!--            </q-item-section>-->

          <!--            <q-item-section>-->
          <!--              Drafts-->
          <!--            </q-item-section>-->
          <!--          </q-item>-->
        </q-list>
      </q-scroll-area>

      <q-img class="absolute-top" src="~assets/gamo.jpg" style="height: 192px">
        <div class="absolute-bottom bg-transparent">
          <q-avatar size="56px" class="q-mb-sm">
            <img src="~assets/logo.png">
          </q-avatar>
          <div class="text-weight-bold">G.A.M.O.</div>
          <div>Gobierno autonomo</div>
        </div>
      </q-img>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import {date} from 'quasar';
export default {
  name: 'MainLayout',
  data () {
    return {
      leftDrawerOpen: false,
      // essentialLinks: linksData
    }
  },
  computed:{
    now(){
      let timeStamp = Date.now()
      // let formattedString = date.formatDate(timeStamp, 'dddd D MMMM');
      let formattedString = date.formatDate(timeStamp, 'dddd D MMMM', {
        days: ['Domingo', 'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo' /* and all the rest of days - remember starting with Sunday */],
        daysShort: ['Dum', 'Lun', /* and all the rest of days - remember starting with Sunday */],
        months: ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre', /* and all the rest of months */],
        monthsShort: ['Ian', 'Feb', /* and all the rest of months */]
      })
      return formattedString
    }
  }
}
</script>
<style lang="scss">
.header-image{
  height: 100%;
  z-index: -1;
  opacity: 0.2;
  filter: grayscale(100%);
}
</style>
