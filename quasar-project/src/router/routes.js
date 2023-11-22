
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: '/search', component: () => import('components/FilterDogs.vue') }
    ]
  },
  // {
  //   path: '/search',
  //   component: () => import('components/FilterDogs.vue'),
  // },
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
];
export default routes
