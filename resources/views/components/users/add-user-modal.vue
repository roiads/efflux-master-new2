<template>
	<div>
		<b-form @submit="addUser">
			<b-form-group id="input-group-first-name" label="First Name:" label-for="input-first-name">
				<b-form-input id="input-first-name" v-model="newUser.first_name" required></b-form-input>
			</b-form-group>

			<b-form-group id="input-group-last-name" label="Last Name:" label-for="input-last-name">
				<b-form-input id="input-last-name" v-model="newUser.last_name" required></b-form-input>
			</b-form-group>

			<b-form-group id="input-group-email" label="Email:" label-for="input-email">
				<b-form-input id="input-email" type="email" v-model="newUser.email" required></b-form-input>
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