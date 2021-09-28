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
    </div>



  </q-page>
</template>

<script>
export default {
  name: 'PageIndex'
}
</script>
