<template>
  <vs-row>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Customer
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="customerData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Bentuk Usaha
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="bentukData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Kategori Usaha
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="kategoriData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Scope Penjualan
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="penjualanData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Model Pengiriman
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="pengirimanData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>
    <vs-col vs-lg="4" vs-sm="12" v-if="$helper.isAllowed('browse_data_visit')">
      <vs-card>
        <div slot="header">
          <h3>
            Partner
          </h3>
        </div>
        <Pie :chart-options="pieOption" :chart-data="partnerData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
          :plugins="plugins" :css-classes="cssClasses" :styles="styles" :width="300" :height="300" />
      </vs-card>
    </vs-col>

    <vs-col vs-sm="12" v-if="$helper.isAllowed('browse_data_armada')">
      <vs-card>
        <div slot="header">
          <h3>
            Status Armada
          </h3>
        </div>
        <badaso-table :data="records">
          <template slot="thead">
            <vs-th sort-key="judul">
              No
            </vs-th>
            <vs-th sort-key="judul">
              Unit Armada
            </vs-th>
            <vs-th sort-key="judul">
              Rencana Servis
            </vs-th>
            <vs-th sort-key="judul">
              Status
            </vs-th>
            <vs-th sort-key="judul">
              Aksi
            </vs-th>
          </template>

          <template slot-scope="{ data }">
            <vs-tr :data="rec" :key="index" v-for="(rec, index) in records">
              <vs-td :data="index + 1">
                {{ index + 1 }}
              </vs-td>
              <vs-td :data="rec.armadaUnit">
                {{ rec.armadaUnit }}
              </vs-td>
              <vs-td :data="rec.dateService">
                {{ date(rec.dateService) }}
              </vs-td>
              <vs-td :data="rec.status">
                {{ rec.status }}
              </vs-td>
              <vs-td>
                <vs-button size="large" type="flat" icon="visibility" :to="{
                  name: 'CrudGeneratedRead',
                  params: {
                    id: rec.id,
                    slug: 'data-armada',
                  },
                }"></vs-button>
                <vs-button size="large" type="flat" icon="visibeditility" :to="{
                  name: 'CrudGeneratedEdit',
                  params: {
                    id: rec.id,
                    slug: 'data-armada',
                  },
                }"></vs-button>
              </vs-td>
            </vs-tr>
          </template>
        </badaso-table>
      </vs-card>
    </vs-col>
  </vs-row>
</template>

<script>
import Vue from "vue";
import { Pie } from 'vue-chartjs/legacy'

import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  ArcElement,
  CategoryScale
} from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, ArcElement, CategoryScale)

export default {
  name: 'PieChart',
  components: {
    Pie
  },
  props: {
    chartId: {
      type: String,
      default: 'pie-chart'
    },
    datasetIdKey: {
      type: String,
      default: 'label'
    },
    width: {
      type: Number,
      default: 400
    },
    height: {
      type: Number,
      default: 400
    },
    cssClasses: {
      default: '',
      type: String
    },
    styles: {
      type: Object,
      default: () => { }
    },
    plugins: {
      type: Array,
      default: () => []
    }
  },
  data() {
    return {
      data: [],
      records: [],
      pieOption: {
        responsive: true,
        maintainAspectRatio: false
      },
      customerData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      },
      bentukData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      },
      kategoriData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      },
      penjualanData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      },
      pengirimanData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      },
      partnerData: {
        labels: [],
        datasets: [
          {
            backgroundColor: ['#050C9C', '#3572EF', '#3ABEF9', '#A7E6FF', '#006769', '#40A578', '#9DDE8B', '#E6FF94'],
            data: []
          }
        ]
      }
    }
  },
  methods: {
    async getEntity() {
      this.$openLoader();
      try {
        let paramData = {
        };
        let response = await Vue.prototype.$resource.get(
          "/api/v1/custom/index",
          { params: paramData }
        );
        this.$closeLoader();
        this.data = response.data;
        this.records = response.data.armada;
        console.log(this.records)
        this.data.customer.forEach(element => {
          this.customerData.labels?.push(element.custKlas);
          this.customerData.datasets[0].data?.push(element.total);
        });
        this.data.bentuk.forEach(element => {
          this.bentukData.labels?.push(element.usahaBentuk);
          this.bentukData.datasets[0].data?.push(element.total);
        });
        this.data.kategori.forEach(element => {
          this.kategoriData.labels?.push(element.usahaKategori);
          this.kategoriData.datasets[0].data?.push(element.total);
        });
        this.data.penjualan.forEach(element => {
          this.penjualanData.labels?.push(element.jualScope);
          this.penjualanData.datasets[0].data?.push(element.total);
        });
        this.data.pengiriman.forEach(element => {
          this.pengirimanData.labels?.push(element.kirimModel);
          this.pengirimanData.datasets[0].data?.push(element.total);
        });
        this.data.partner.forEach(element => {
          this.partnerData.labels?.push(element.partnerStatus);
          this.partnerData.datasets[0].data?.push(element.total);
        });
      } catch (error) {
        if (error.status == 503) {
          this.showMaintenancePage = true;
        }
        this.$closeLoader();
        this.$vs.notify({
          title: this.$t("alert.danger"),
          text: error.message,
          color: "danger",
        });
      }
    },
    date(date) {
      var dateNew = new Date(date);
      return new Intl.DateTimeFormat("id-ID", {
        day: "2-digit",
        month: "long",
        year: "numeric",
      }).format(dateNew);
    },
  },
  mounted() {
    this.getEntity();
  }
}
</script>
