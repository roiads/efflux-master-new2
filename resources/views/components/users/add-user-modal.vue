<template>
	<div>
		<b-form @submit.prevent="addUser">
			<b-form-group id="input-group-first-name" label="First Name:" label-for="input-first-name">
				<b-form-input id="input-first-name" name="first_name" v-model="newUser.first_name" placeholder="Enter First Name" required></b-form-input>
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

			<b-form-group label="Roles:">
				<multiselect v-model="newUser.selected_roles" placeholder="Select Roles" label="name" track-by="name" open-direction="bottom" :options="roles" :searchable="true" select-label="" deselect-label="" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true">
					<template slot="option" slot-scope="props">
						<div class="multiselect__clear">{{ props.option.name }}</div>
					</template>
				</multiselect>
			</b-form-group>

			<b-button type="submit" variant="primary">Add</b-button>

		</b-form>
	</div>
</template>

<script>
	import Multiselect from 'vue-multiselect'

	export default {
		name: "add-user-modal",
		data() {
			return {
				newUser: {
					first_name: '',
					last_name: '',
					email: '',
					password: '',
					selected_roles: []
				},
				roles: [],
			}
		},
		components: {
            Multiselect    
        },
		mounted() {
			this.fetchRoles()
		},
		methods: {
			addUser() {
				axios.post(`/api/user`, this.newUser).then(response => {
					if(response.data.success) {
						this.newUser = {
							first_name: '',
							last_name: '',
							email: '',
							password: '',
							selected_roles: []	
						}

						this.$emit('add-success')
					}
				}).catch(error => {
					console.log(error);
				})
			},
			fetchRoles() {
				axios.get(`/api/roles`).then(response => {
					if(response.data.success) {
						this.roles = response.data.roles	
					}
				}).catch(error => {
					console.log(error);
				})
			}

		}

	}
</script>