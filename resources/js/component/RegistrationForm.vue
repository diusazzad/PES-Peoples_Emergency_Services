<template>
  <div>
    <h1>Registration</h1>
    <form @submit.prevent="registerUser">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="formData.name">
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="formData.email">
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="formData.password">
      </div>
      <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" v-model="formData.password_confirmation">
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const formData = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
});

const registerUser = () => {
  Inertia.post('/api/register', formData).then(() => {
    // Registration successful, redirect to another page
    Inertia.visit('/dashboard');
  }).catch((error) => {
    // Handle registration error, e.g., display error messages
    console.error(error);
  });
};

export { formData, registerUser };
</script>
