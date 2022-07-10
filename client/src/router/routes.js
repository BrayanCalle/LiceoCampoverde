const routes = [
  {
    path: '/',
    redirect: '/home',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '/home',
        name: 'home',
        component: () => import('pages/Home.vue')
      }
    ]
  },
  {
    path: '/campito',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '',
        name: 'campito',
        component: () => import('pages/Campito.vue')
      }
    ]
  },
  {
    path: '/',
    redirect: '/home'
  },
  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
