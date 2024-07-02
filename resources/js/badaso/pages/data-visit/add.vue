<template>
    <div>
      <template v-if="!isMaintenance">
        <badaso-breadcrumb-row full> </badaso-breadcrumb-row>
        <vs-row v-if="$helper.isAllowedToModifyGeneratedCRUD('add', dataType)">
  
          <vs-col vs-lg="6" vs-sm="12">
            <vs-card>
              <div slot="header">
                <h3>
                  Customer
                </h3>
              </div>
              <vs-row>
                <badaso-date
                  :label="dataType.dataRows[2].displayName"
                  :placeholder="dataType.dataRows[2].displayName"
                  v-model="dataType.dataRows[2].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[2].field)]
                  "
                ></badaso-date>
                <badaso-text
                  :label="dataType.dataRows[3].displayName"
                  :placeholder="dataType.dataRows[3].displayName"
                  v-model="dataType.dataRows[3].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[3].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[4].displayName"
                  :placeholder="dataType.dataRows[4].displayName"
                  v-model="dataType.dataRows[4].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[4].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[5].displayName"
                  :placeholder="dataType.dataRows[5].displayName"
                  v-model="dataType.dataRows[5].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[5].field)]
                  "
                ></badaso-text>
                <badaso-textarea
                  :label="dataType.dataRows[6].displayName"
                  :placeholder="dataType.dataRows[6].displayName"
                  v-model="dataType.dataRows[6].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[6].field)]
                  "
                ></badaso-textarea>
                <badaso-select
                    :label="dataType.dataRows[7].displayName"
                    :placeholder="dataType.dataRows[7].displayName"
                    v-model="dataType.dataRows[7].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[7].field)]
                    "
                    :items="dataType.dataRows[7].details.items ? dataType.dataRows[7].details.items : []"
                  ></badaso-select>
              </vs-row>
            </vs-card>
            <!------------------------>
            <vs-card>
              <div slot="header">
                <h3>
                  Usaha
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[8].displayName"
                    :placeholder="dataType.dataRows[8].displayName"
                    v-model="dataType.dataRows[8].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[8].field)]
                    "
                    :items="dataType.dataRows[8].details.items ? dataType.dataRows[8].details.items : []"
                ></badaso-select>
                <badaso-text
                  :label="dataType.dataRows[9].displayName"
                  :placeholder="dataType.dataRows[9].displayName"
                  v-model="dataType.dataRows[9].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[9].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[10].displayName"
                  :placeholder="dataType.dataRows[10].displayName"
                  v-model="dataType.dataRows[10].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[10].field)]
                  "
                ></badaso-text>
                <badaso-select
                    :label="dataType.dataRows[11].displayName"
                    :placeholder="dataType.dataRows[11].displayName"
                    v-model="dataType.dataRows[11].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[11].field)]
                    "
                    :items="dataType.dataRows[11].details.items ? dataType.dataRows[11].details.items : []"
                ></badaso-select>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  PIC
                </h3>
              </div>
              <vs-row>
                <badaso-text
                  :label="dataType.dataRows[12].displayName"
                  :placeholder="dataType.dataRows[12].displayName"
                  v-model="dataType.dataRows[12].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[12].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[13].displayName"
                  :placeholder="dataType.dataRows[13].displayName"
                  v-model="dataType.dataRows[13].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[13].field)]
                  "
                ></badaso-text>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Penjualan
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[14].displayName"
                    :placeholder="dataType.dataRows[14].displayName"
                    v-model="dataType.dataRows[14].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[14].field)]
                    "
                    :items="dataType.dataRows[14].details.items ? dataType.dataRows[14].details.items : []"
                ></badaso-select>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Kemasan
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[15].displayName"
                    :placeholder="dataType.dataRows[15].displayName"
                    v-model="dataType.dataRows[15].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[15].field)]
                    "
                    :items="dataType.dataRows[15].details.items ? dataType.dataRows[15].details.items : []"
                ></badaso-select>
                <badaso-text
                  :label="dataType.dataRows[16].displayName"
                  :placeholder="dataType.dataRows[16].displayName"
                  v-model="dataType.dataRows[16].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[16].field)]
                  "
                ></badaso-text>
                <badaso-select
                    :label="dataType.dataRows[20].displayName"
                    :placeholder="dataType.dataRows[20].displayName"
                    v-model="dataType.dataRows[20].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[20].field)]
                    "
                    :items="dataType.dataRows[20].details.items ? dataType.dataRows[20].details.items : []"
                ></badaso-select>
                <badaso-upload-image
                    :label="dataType.dataRows[21].displayName"
                    :placeholder="dataType.dataRows[21].displayName"
                    v-model="dataType.dataRows[21].value"
                    :private-only="true"
                    size="12"
                    :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[21].field)]
                    "
                ></badaso-upload-image>
              </vs-row>
            </vs-card>

          </vs-col>
  
          <vs-col vs-lg="6" vs-sm="12">
            <vs-card>
              <div slot="header">
                <h3>
                  Barang
                </h3>
              </div>
              <vs-row>
                <badaso-text
                  :label="dataType.dataRows[17].displayName"
                  :placeholder="dataType.dataRows[17].displayName"
                  v-model="dataType.dataRows[17].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[17].field)]
                  "
                ></badaso-text>
                <badaso-select
                    :label="dataType.dataRows[18].displayName"
                    :placeholder="dataType.dataRows[18].displayName"
                    v-model="dataType.dataRows[18].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[18].field)]
                    "
                    :items="dataType.dataRows[18].details.items ? dataType.dataRows[18].details.items : []"
                ></badaso-select>
                <badaso-text
                  :label="dataType.dataRows[19].displayName"
                  :placeholder="dataType.dataRows[19].displayName"
                  v-model="dataType.dataRows[19].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[19].field)]
                  "
                ></badaso-text>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Pengiriman
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[22].displayName"
                    :placeholder="dataType.dataRows[22].displayName"
                    v-model="dataType.dataRows[22].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[22].field)]
                    "
                    :items="dataType.dataRows[22].details.items ? dataType.dataRows[22].details.items : []"
                ></badaso-select>
                <badaso-text
                  :label="dataType.dataRows[23].displayName"
                  :placeholder="dataType.dataRows[23].displayName"
                  v-model="dataType.dataRows[23].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[23].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[24].displayName"
                  :placeholder="dataType.dataRows[24].displayName"
                  v-model="dataType.dataRows[24].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[24].field)]
                  "
                ></badaso-text>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Layanan
                </h3>
              </div>
              <vs-row>
                <badaso-textarea
                  :label="dataType.dataRows[25].displayName"
                  :placeholder="dataType.dataRows[25].displayName"
                  v-model="dataType.dataRows[25].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[25].field)]
                  "
                ></badaso-textarea>
                <badaso-textarea
                  :label="dataType.dataRows[26].displayName"
                  :placeholder="dataType.dataRows[26].displayName"
                  v-model="dataType.dataRows[26].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[26].field)]
                  "
                ></badaso-textarea>
                <badaso-time
                    :label="dataType.dataRows[29].displayName"
                    :placeholder="dataType.dataRows[29].displayName"
                    v-model="dataType.dataRows[29].value"
                    value-zone="local"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[29].field)]
                    "
                ></badaso-time>
                <badaso-text
                  :label="dataType.dataRows[30].displayName"
                  :placeholder="dataType.dataRows[30].displayName"
                  v-model="dataType.dataRows[30].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[30].field)]
                  "
                ></badaso-text>
                <badaso-text
                  :label="dataType.dataRows[31].displayName"
                  :placeholder="dataType.dataRows[31].displayName"
                  v-model="dataType.dataRows[31].value"
                  size="12"
                  :alert="
                    errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[31].field)]
                  "
                ></badaso-text>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Pembayaran
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[27].displayName"
                    :placeholder="dataType.dataRows[27].displayName"
                    v-model="dataType.dataRows[27].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[27].field)]
                    "
                    :items="dataType.dataRows[27].details.items ? dataType.dataRows[27].details.items : []"
                ></badaso-select>
                <badaso-select
                    :label="dataType.dataRows[28].displayName"
                    :placeholder="dataType.dataRows[28].displayName"
                    v-model="dataType.dataRows[28].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[28].field)]
                    "
                    :items="dataType.dataRows[28].details.items ? dataType.dataRows[28].details.items : []"
                ></badaso-select>
              </vs-row>
            </vs-card>

            <vs-card>
              <div slot="header">
                <h3>
                  Partner
                </h3>
              </div>
              <vs-row>
                <badaso-select
                    :label="dataType.dataRows[32].displayName"
                    :placeholder="dataType.dataRows[32].displayName"
                    v-model="dataType.dataRows[32].value"
                    size="12"
                    :alert="
                      errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[32].field)]
                    "
                    :items="dataType.dataRows[32].details.items ? dataType.dataRows[32].details.items : []"
                ></badaso-select>
                    <badaso-select
                        v-if="dataType.dataRows[32].value == 1"
                        :label="dataType.dataRows[33].displayName"
                        :placeholder="dataType.dataRows[33].displayName"
                        v-model="dataType.dataRows[33].value"
                        size="12"
                        :alert="
                        errors[$caseConvert.stringSnakeToCamel(dataType.dataRows[33].field)]
                        "
                        :items="dataType.dataRows[33].details.items ? dataType.dataRows[33].details.items : []"
                    ></badaso-select>
              </vs-row>
            </vs-card>
          </vs-col>

          <vs-col vs-sm="12">
            <vs-card>
              <div slot="header">
                <h3>
                  Kirim
                </h3>
              </div>
              <vs-row>
                  <vs-button color="primary" type="relief" @click="submitForm">
                    <vs-icon icon="save"></vs-icon>
                    {{ $t("crudGenerated.add.button") }}
                  </vs-button>
                  <vs-button
                      :to="{
                        name: 'DataPendingAddBrowse',
                        params: {
                          urlBase64: base64PathName,
                        },
                      }"
                      v-if="dataLength > 0 && !isOnline"
                      color="success"
                      type="relief"
                    >
                      <vs-icon icon="history"></vs-icon>
                      <strong
                        >{{ dataLength }} {{ $t("offlineFeature.dataPending") }}
                      </strong>
                  </vs-button>
              </vs-row>
            </vs-card>
          </vs-col>

        </vs-row>
        <vs-row v-else>
          <vs-col vs-lg="12">
            <vs-card>
              <vs-row>
                <vs-col vs-lg="12">
                  <h3>
                    {{
                      $t("crudGenerated.warning.notAllowedToAdd", {
                        tableName: dataType.displayNameSingular,
                      })
                    }}
                  </h3>
                </vs-col>
              </vs-row>
            </vs-card>
          </vs-col>
        </vs-row>
      </template>
      <template v-if="isMaintenance">
        <badaso-breadcrumb-row full> </badaso-breadcrumb-row>
  
        <vs-row v-if="$helper.isAllowedToModifyGeneratedCRUD('add', dataType)">
          <vs-col vs-lg="12">
            <div class="badaso-maintenance__container">
              <img :src="`${maintenanceImg}`" alt="Maintenance Icon" />
              <h1 class="badaso-maintenance__text">
                We are under <br />maintenance
              </h1>
            </div>
          </vs-col>
        </vs-row>
      </template>
    </div>
  </template>
  
  <script>
  export default {
    name: "CrudGeneratedAdd",
    components: {},
    data: () => ({
      isValid: true,
      errors: {},
      dataType: {},
      relationData: {},
      isMaintenance: false,
      dataLength: 0,
      pathname: location.pathname,
      userId: "",
    }),
    mounted() {
      this.getDataType();
      this.getRelationDataBySlug();
      this.requestObjectStoreData();
      this.getUser();
    },
    methods: {
      syncSlug() {
        let kebab = this.$helper.generateSlug(this.dataType.dataRows[3].value).replaceAll("'", "");
        this.dataType.dataRows[4].value = kebab
      },
      submitForm() {
        this.errors = {};
        this.isValid = true;
  
        // init data rows
        const dataRows = {};
  
        for (const row of this.dataType.dataRows) {
           dataRows[row.field] = row.value;
  
          if (row.type == "data_identifier") {
            dataRows[row.field] = this.userId;
          }
  
        }
  
        // validate values in data rows must not equals 0
        if (Object.values(dataRows).length == 0) {
          this.isValid = false;
          return;
        }
  
        // start request
        this.$openLoader();
        this.$api.badasoEntity
          .add({
            slug: this.$route.params.slug,
            data: dataRows,
          })
          .then((response) => {
            this.$closeLoader();
            this.$router.push({
              name: "CrudGeneratedBrowse",
              params: {
                slug: this.$route.params.slug,
              },
            });
          })
          .catch((error) => {
            this.requestObjectStoreData();
            this.errors = error.errors;
            this.$closeLoader();
            this.$vs.notify({
              title: this.$t("alert.danger"),
              text: error.message,
              color: "danger",
            });
          });
      },
      async getDataType() {
        this.$openLoader();
  
        try {
          const response = await this.$api.badasoCrud.readBySlug({
            slug: this.$route.params.slug,
          });
  
          this.$closeLoader();
          this.dataType = response.data.crudData;
          console.log(this.dataType)
          const dataRows = response.data.crudData.dataRows.map((data) => {
            if (
              data.value == undefined &&
              (data.type == "upload_image" || data.type == "upload_file")
            ) {
              data.value = "";
            } else if (
              data.value == undefined &&
              (data.type == "upload_image_multiple" ||
                data.type == "upload_file_multiple" ||
                data.type == "select_multiple" ||
                data.type == "checkbox")
            ) {
              data.value = Array;
            }
             else if (data.value == undefined && data.type == "slider") {
              data.value = 0;
            } else if (data.value == undefined && data.type == "switch") {
              data.value = 0;
            } else if (data.value == undefined && data.type == "tags") {
              data.value = "";
            } else if (data.value == undefined) {
              data.value = "";
            }
            try {
              data.details = JSON.parse(data.details);
              if (data.type == "hidden") {
                data.value = data.details.value ? data.details.value : "";
              }
            } catch (error) {}
            return data;
          });
          this.dataType.dataRows = JSON.parse(JSON.stringify(dataRows));
  
        } catch (error) {
          if (error.status == 503) {
            this.isMaintenance = true;
          }
          this.$closeLoader();
          this.$vs.notify({
            title: this.$t("alert.danger"),
            text: error.message,
            color: "danger",
          });
        }
      },
  
      getRelationDataBySlug() {
        this.$openLoader();
        this.$api.badasoTable
          .relationDataBySlug({
            slug: this.$route.params.slug,
          })
          .then((response) => {
            this.$closeLoader();
            this.relationData = response.data;
          })
          .catch((error) => {
            if (error.status == 503) {
              this.isMaintenance = true;
            }
            this.$closeLoader();
            this.$vs.notify({
              title: this.$t("alert.danger"),
              text: error.message,
              color: "danger",
            });
          });
      },
      requestObjectStoreData() {
        this.$readObjectStore(this.pathname).then((store) => {
          if (store.result) {
            this.dataLength = store.result.data.length;
          }
        });
      },
      getUser() {
        this.errors = {};
        this.$openLoader();
        this.$api.badasoAuthUser
          .user({})
          .then((response) => {
            this.$closeLoader();
            this.userId = response.data.user.id;
          })
          .catch((error) => {
            this.errors = error.errors;
            this.$closeLoader();
            this.$vs.notify({
              title: this.$t("alert.danger"),
              text: error.message,
              color: "danger",
            });
          });
      },
    },
    computed: {
      isOnline: {
        get() {
          const isOnline = this.$store.getters["badaso/getGlobalState"].isOnline;
          return isOnline;
        },
      },
      base64PathName() {
        return window.btoa(location.pathname);
      },
      maintenanceImg() {
        const config = this.$store.getters["badaso/getConfig"];
        return config.maintenanceImage;
      },
    },
  };
  </script>
  