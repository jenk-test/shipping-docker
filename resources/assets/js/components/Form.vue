<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="alert alert-success" v-if="submitted">
                    Form successfully submitted!
                </div>

                <form method="POST" action="" id="create-form" class="form-horizontal form"
                      v-on:submit.prevent="submitForm" enctype="multipart/form-data" v-if="! submitted">

                    <div class="form-group">
                        <label for="name" class="control-label col-xs-3">Name</label>
                        <div class="col-xs-9">
                            <input class="w-input text-field form-control" placeholder="competition name" name="name"
                                   type="text" id="name" v-model="formdata.name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label col-xs-3">Description</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control" placeholder="competition description"
                                      rows="5" name="description" cols="50" id="description"
                                      v-model="formdata.description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="seo_title" class="control-label col-xs-3">SEO Title</label>
                        <div class="col-xs-9">
                            <input class="w-input text-field form-control"
                                   placeholder="Maximum of 60 chars for the title." name="seo_title" type="text"
                                   id="seo_title" v-model="formdata.seo_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="seo_description" class="control-label col-xs-3">SEO Description</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for the description." rows="5"
                                      name="seo_description" cols="50" id="seo_description"
                                      v-model="formdata.seo_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alias" class="control-label col-xs-3">Alias</label>
                        <div class="col-xs-9">
                            <input class="w-input text-field form-control"
                                   placeholder="Maximum of 60 chars for the alias." name="alias" type="text" id="alias"
                                   v-model="formdata.alias">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alias_description" class="control-label col-xs-3">Alias Description</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for alias description." rows="5"
                                      name="alias_description" cols="50" id="alias_description"
                                      v-model="formdata.alias_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="keywords" class="control-label col-xs-3">Keywords</label>
                        <div class="col-xs-9">
                            <input class="w-input text-field form-control" placeholder="Keywords - separate by commas"
                                   name="keywords" type="text" id="keywords" v-model="formdata.keywords">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remarks" class="control-label col-xs-3">Remarks</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for remarks." rows="5" name="remarks" cols="50"
                                      id="remarks" v-model="formdata.remarks"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remarks1" class="control-label col-xs-3">Remarks 1</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for remarks." rows="5" name="remarks1" cols="50"
                                      id="remarks1" v-model="formdata.remarks1"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remarks" class="control-label col-xs-3">Remarks 2</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for remarks." rows="5" name="remarks2" cols="50"
                                      id="remarks2" v-model="formdata.remarks2"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remarks" class="control-label col-xs-3">Remarks 3</label>
                        <div class="col-xs-9">
                            <textarea class="w-input text-field form-control"
                                      placeholder="maximum of 160 chars for remarks." rows="5" name="remarks3" cols="50"
                                      id="remarks3" v-model="formdata.remarks3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="is_active" class="control-label col-xs-3">Activate?</label>
                        <div class="col-xs-9">
                            <input name="is_active" type="checkbox" value="1" id="is_active"
                                   v-model="formdata.is_active">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="is_form" class="control-label col-xs-3">Link Form?</label>
                        <div class="col-xs-9">
                            <input name="is_form" type="checkbox" value="1" id="is_form"v-model="formdata.is_form">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="featured" class="control-label col-xs-3">Featured?</label>
                        <div class="col-xs-9">
                            <input name="featured" type="checkbox" value="1" id="featured" v-model="formdata.featured">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-9">
                            <input class="btn btn-primary" type="submit" value="Submit">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data() {
        return {
            formdata: {},
            submitted: false
        }
       },

       methods: {
            submitForm() {

                this.submitted = true

            }
       }
    }

</script>
