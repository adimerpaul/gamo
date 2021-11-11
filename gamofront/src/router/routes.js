import Index from 'pages/Index'
import Tasas from "pages/Tasas";
import Mercado from "pages/Mercado";
import Actividad from "pages/Actividad";
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: Index},
      { path: 'tasas', component: Tasas},
      { path: 'mercado', component: Mercado},
      { path: 'actividad', component: Actividad},
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
