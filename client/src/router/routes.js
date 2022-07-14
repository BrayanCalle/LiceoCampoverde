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
      },
      {
        path: '/blog',
        redirect: '/blog',
        component: () => import('layouts/LayoutBlog.vue'),
        children: [
          {
            path: '/blog',
            name: 'blog',
            component: () => import('pages/blog/Blog.vue')
          },
          {
            path: '/blog/:id',
            name: 'blog-detail',
            component: () => import('pages/blog/Detalle.vue'),
            meta: { compartir: true }
          }
        ]
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
    path: '/bachiller',
    redirect: '/bachiller',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '/bachiller',
        name: 'bachiller',
        component: () => import('pages/Bachillerato.vue')
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
