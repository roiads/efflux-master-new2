<template>
	<div>
		<b-form @submit.prevent="addUser">
			<b-form-group id="input-group-first-name" label="First Name:" label-for="input-first-name">
				<b-form-input id="input-first-name" name="first_name" v-model="newUser.first_name" placeholder="Enter First Name" v-validate="'required'" :class="{ 'is-invalid': errors.has('first_name') }"></b-form-input>

				<div v-if="errors.has('first_name')" class="invalid-feedback">
					{{ errors.first('first_name') }}
				</div>

			</b-form-group>

			<b-form-group id="input-group-last-name" label="Last Name:" label-for="input-last-name">
				<b-form-input id="input-last-name" name="last_name" v-model="newUser.last_name" placeholder="Enter Last Name" v-validate="'required'" :class="{ 'is-invalid': errors.has('last_name') }"></b-form-input>

				<div v-if="errors.has('last_name')" class="invalid-feedback">
					{{ errors.first('last_name') }}
				</div>
			</b-form-group>

			<b-form-group id="input-group-email" label="Email:" label-for="input-email">
				<b-form-input id="input-email" type="email" name="email" v-model="newUser.email" placeholder="Enter Email" v-validate="'required|email'" :class="{ 'is-invalid': errors.has('email') }"></b-form-input>

				<div v-if="errors.has('email')" class="invalid-feedback">
					{{ errors.first('email') }}
				</div>
			</b-form-group>

			<b-form-group id="input-group-password" label="Password:" label-for="input-password">
				<b-form-input id="input-password" name="password" type="password" v-model="newUser.password" placeholder="Enter Password" v-validate="'required'" :class="{ 'is-invalid': errors.has('password') }"></b-form-input>

				<div v-if="errors.has('password')" class="invalid-feedback">
					{{ errors.first('password') }}
				</div>
			</b-form-group>

			<b-form-group label="Roles:">
				<multiselect v-model="newUser.selected_roles" placeholder="Select Roles" label="name" track-by="name" open-direction="bottom" :options="roles" :searchable="true" select-label="" deselect-label="" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true">
					<template slot="option" slot-scope="props" @select="errors.remove('roles')">
						<div class="multiselect__clear">{{ props.option.name }}</div>
					</template>
				</multiselect>

				<span class="invalid-feedback" style="display: block;" v-if="errors.first('roles')">
					{{ errors.first('roles') }}
				</span>

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
				dictionary: {
					attributes: {
                    	first_name: 'First Name',
                    	last_name: 'Last Name',
                    	email: 'Email',
                    	password: 'Password',
                    	roles: 'Roles',
                    },
                    custom: {

                    }
				}
			}
		},
		components: {
            Multiselect    
        },
		mounted() {
			this.$validator.localize('en', this.dictionary)
			this.fetchRoles()
		},
		methods: {
			addUser() {

				/*axios.post(`/api/user`, this.newUser).then(response => {
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
				})*/

				if(this.selected_roles.length == 0) {
					this.errors.add({
						field: 'roles',
						msg: 'Please Select Roles'
					})
				}

				this.$validator.validate().then(valid => {
					if(valid) {
						if(this.errors.items.length == 0) {
							axios.post(`/api/user`, this.newUser).then(response => {
								if(response.data.success) {
									this.errors.clear()
                                	this.$validator.reset()

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
						}
					}
				}).catch(error => {
					//console.log(error)
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