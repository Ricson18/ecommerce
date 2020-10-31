/*=========================================================================================
  File Name: moduleCalendarMutations.js
  Description: Calendar Module Mutations
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/


export default {
  ADD_ITEM (state, item) {
    state.products.unshift(item)
  },
  SET_PRODUCTS (state, products) {
    state.products = products
  },
  SET_CATEGORIES (state, categories) {
    state.categories = categories
  },
  SET_CATEGORY (state, category) {
    state.category = category
  },
  SET_CUSTOMER (state, customer) {
    state.customer = customer
  },
  SET_CUSTOMERS (state, customers) {
    state.customers = customers
  },
  SET_ORDER (state, order) {
    state.order = order
  },
  SET_ORDERS (state, orders) {
    state.orders = orders
  },
  SET_PRODUCT (state, product) {
    state.product = product
  },
  // SET_LABELS(state, labels) {
  //   state.eventLabels = labels
  // },
  UPDATE_PRODUCT (state, product) {
    const productIndex = state.products.findIndex((p) => p.id === product.id)
    Object.assign(state.products[productIndex], product)
  },
  REMOVE_ITEM (state, itemId) {
    const ItemIndex = state.products.findIndex((p) => p.id === itemId)
    state.products.splice(ItemIndex, 1)
  }
}
