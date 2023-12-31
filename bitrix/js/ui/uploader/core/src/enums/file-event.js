/**
 * @namespace BX.UI.Uploader
 */
export const FileEvent = {
	ADD: 'onAdd',
	BEFORE_UPLOAD: 'onBeforeUpload',
	UPLOAD_START: 'onUploadStart',
	UPLOAD_ERROR: 'onUploadError',
	UPLOAD_PROGRESS: 'onUploadProgress',
	UPLOAD_COMPLETE: 'onUploadComplete',
	UPLOAD_CONTROLLER_INIT: 'onUploadControllerInit',
	LOAD_START: 'onLoadStart',
	LOAD_PROGRESS: 'onLoadProgress',
	LOAD_COMPLETE: 'onLoadComplete',
	LOAD_ERROR: 'onLoadError',
	LOAD_CONTROLLER_INIT: 'onLoadControllerInit',
	REMOVE_ERROR: 'onRemoveError',
	REMOVE_COMPLETE: 'onRemoveComplete',
	REMOVE_CONTROLLER_INIT: 'onRemoveControllerInit',
	STATE_CHANGE: 'onStateChange',
	STATUS_CHANGE: 'onStatusChange',
	VALIDATE_FILE_ASYNC: 'onValidateFileAsync',
	PREPARE_FILE_ASYNC: 'onPrepareFileAsync',
};
