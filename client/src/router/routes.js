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
        path: '/acerca-de-nosotros',
        name: 'acerca-de-nosotros',
        component: () => import('pages/Acerca-de-nosotros.vue')
      },
      {
        path: '/admisiones',
        name: 'admisiones',
        component: () => import('pages/Admisiones.vue')
      },
      {
        path: '/inscripcion',
        name: 'inscripcion',
        component: () => import('pages/Inscripcion.vue')
      },
      {
        path: '/campito',
        name: 'campito',
        component: () => import('pages/Campito.vue')
      },
      {
        path: '/basic',
        name: 'basic',
        component: () => import('pages/Basic.vue')
      },
      {
        path: '/bachiller',
        name: 'bachiller',
        component: () => import('pages/Bachillerato.vue')
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
  /*  {
    path: '/campito',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '/campito',
        name: 'campito',
        component: () => import('pages/Campito.vue')
      }
    ]
  },
  {
    path: '/basic',
    redirect: '/basic',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '/basic',
        name: 'basic',
        component: () => import('pages/Basic.vue')
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
  }, */
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
