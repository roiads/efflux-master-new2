<template>
	<div>
		<b-form @submit="addUser">
			<b-form-group id="input-group-first-name" label="First Name:" label-for="input-first-name">
				<b-form-input id="input-first-name" v-model="newUser.first_name" placeholder="Enter First Name" required></b-form-input>
			</b-form-group>

			<b-form-group id="input-group-last-name" label="Last Name:" label-for="input-last-name">
				<b-form-input id="input-last-name" v-model="newUser.last_name" placeholder="Enter Last Name" required></b-form-input>
			</b-form-group>

			<b-form-group id="input-group-email" label="Email:" label-for="input-email">
				<b-form-input id="input-email" type="email" v-model="newUser.email" placeholder="Enter Email" required></b-form-input>
			</b-form-group>

			<b-form-group id="input-group-password" label="Password:" label-for="input-password">
				<b-form-input id="input-password" type="password" v-model="newUser.password" placeholder="Enter Password" required></b-form-input>
			</b-form-group>

		</b-form>
	</div>
</template>

<script>
	export default {
		name: "add-user-modal",
		data() {
			return {
				newUser: {
					first_name: '',
					last_name: '',
					email: '',
					password: '',
					roles: []
				}
			}
		},
		mounted() {

		},
		methods: {
			addUser() {

			},

		}

	}
</script>