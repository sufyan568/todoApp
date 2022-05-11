<div class="form-group row align-items-center" :class="{'has-danger': errors.has('label'), 'has-success': fields.label && fields.label.valid }">
    <label for="label" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.label') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.label" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('label'), 'form-control-success': fields.label && fields.label.valid}" id="label" name="label" placeholder="{{ trans('admin.task.columns.label') }}">
        <div v-if="errors.has('label')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('label') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('due_date'), 'has-success': fields.due_date && fields.due_date.valid }">
    <label for="due_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.due_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <datetime v-model="form.due_date" :config="datePickerConfig"class="form-control" :class="{'form-control-danger': errors.has('due_date'), 'form-control-success': fields.due_date && fields.due_date.valid}" id="due_date" name="due_date" placeholder="{{ trans('admin.task.columns.due_date') }}"></datetime>

        {{--            <input type="date" v-model="form.due_date" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('due_date'), 'form-control-success': fields.due_date && fields.due_date.valid}" id="due_date" name="due_date" placeholder="{{ trans('admin.task.columns.due_date') }}">--}}
        <div v-if="errors.has('due_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('due_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': fields.color && fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.color') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{--        <input type="text" v-model="form.color" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': fields.color && fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.task.columns.color') }}">--}}
        <color-picker v-model="form.color"  @change="change" @afterChange="afterChange"  v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': fields.color && fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.task.columns.color') }}"></color-picker>
        <div v-if="errors.has('color')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('color') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('icon'), 'has-success': fields.icon && fields.icon.valid }">
    <label for="icon" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.task.columns.icon') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{--        <font-awesome-picker v-on:selectIcon="yourFunction"></font-awesome-picker>--}}
        <vue-icon-picker v-model="form.icon" v-validate="'required'" id="icon" name="icon" placeholder="{{ trans('admin.task.columns.icon') }}"></vue-icon-picker>
        {{--        <input type="text" v-model="form.icon" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('icon'), 'form-control-success': fields.icon && fields.icon.valid}" id="icon" name="icon" placeholder="{{ trans('admin.task.columns.icon') }}">--}}
        {{--        <font-awesome-picker v-model="form.icon" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('icon'), 'form-control-success': fields.icon && fields.icon.valid}" id="icon" name="icon" placeholder="{{ trans('admin.task.columns.icon') }}"></font-awesome-picker>--}}
        <div v-if="errors.has('icon')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('icon') }}</div>
    </div>
</div>


