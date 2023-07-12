import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  // history: createWebHistory(import.meta.env.BASE_URL),
  history: createWebHistory(process.env.BASE_URL),
  routes: [

    {
      path: '/',
      name: 'home',
      component: () => import('../views/main/Index.vue')

    },

    {
      path: '/products',
      name: 'products.index',
      component: () => import('../views/products/Index.vue')
    },

    {
      path: '/products/:id',
      name: 'products.show',
      component: () => import('../views/products/Show.vue')
    }
    ,

    {
      path: '/cart',
      name: 'products.cart',
      component: () => import('../views/products/Cart.vue')
    }

  ]
})

export default router
