<div class="br3 ba b--gray-monica bg-white mb4">
    <div class="pa3 bb b--gray-monica">
        <h3 class="mb3">
      {{ $t('settings.personalization_module_title') }}
    </h3>
    <p>
      {{ $t('settings.personalization_module_desc') }}
    </p>

    <div class="mt3 mb3 form-information-message br2" v-if="limited">
      <div class="pa3 flex">
        <div class="mr3">
          <svg viewBox="0 0 20 20"><g fill-rule="evenodd"><circle cx="10" cy="10" r="9" fill="currentColor"></circle><path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m1-5v-3a1 1 0 0 0-1-1H9a1 1 0 1 0 0 2v3a1 1 0 0 0 1 1h1a1 1 0 1 0 0-2m-1-5.9a1.1 1.1 0 1 0 0-2.2 1.1 1.1 0 0 0 0 2.2"></path></g></svg>
        </div>
        <div class="">
          {{ $t('settings.personalisation_paid_upgrade') }}
        </div>
      </div>
    </div>

    <div class="dt dt--fixed w-100 collapse br--top br--bottom">

      <div class="dt-row">
        <div class="dtc">
          <div class="pa2 b">
            {{ $t('settings.personalization_contact_field_type_table_name') }}
          </div>
        </div>
        <div class="dtc" v-bind:class="[ dirltr ? 'tr' : 'tl' ]">
          <div class="pa2 b">
            {{ $t('settings.personalization_contact_field_type_table_actions') }}
          </div>
        </div>
      </div>

      <div class="dt-row bb b--light-gray" v-for="module in modules" :key="module.id">
        <div class="dtc">
          <div class="pa2">
            {{ module.name }}
          </div>
        </div>
        <div class="dtc" v-bind:class="[ dirltr ? 'tr' : 'tl' ]">
          <div class="pa2">
            <toggle-button :class="'module-'" :value="module.active" :disabled="limited" :sync="true" :labels="true" v-on:change="toggle(module)" />
          </div>
        </div>
      </div>

    </div>
</div>