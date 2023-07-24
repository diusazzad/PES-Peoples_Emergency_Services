import { createWebHistory, createRouter } from 'vue-router';
import RegistrationPage from './pages/RegistrationPage.vue';

const routes = [
  // Other routes
  {
    path: '/register',
    component: RegistrationPage,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
