<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace GPBMetadata\Google\Cloud\Recaptchaenterprise\V1;

class Recaptchaenterprise
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
ɮ
=google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto#google.cloud.recaptchaenterprise.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
CreateAssessmentRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH

assessment (2/.google.cloud.recaptchaenterprise.v1.AssessmentB�A"�
TransactionEventc

event_type (2J.google.cloud.recaptchaenterprise.v1.TransactionEvent.TransactionEventTypeB�A
reason (	B�A
value (B�A3

event_time (2.google.protobuf.TimestampB�A"�
TransactionEventType&
"TRANSACTION_EVENT_TYPE_UNSPECIFIED 
MERCHANT_APPROVE
MERCHANT_DENY
MANUAL_REVIEW
AUTHORIZATION
AUTHORIZATION_DECLINE
PAYMENT_CAPTURE
PAYMENT_CAPTURE_DECLINE

CANCEL
CHARGEBACK_INQUIRY	
CHARGEBACK_ALERT

FRAUD_NOTIFICATION

CHARGEBACK
CHARGEBACK_REPRESENTMENT
CHARGEBACK_REVERSE
REFUND_REQUEST
REFUND_DECLINE

REFUND
REFUND_REVERSE"�
AnnotateAssessmentRequestC
name (	B5�A�A/
-recaptchaenterprise.googleapis.com/Assessmentb

annotation (2I.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.AnnotationB�A[
reasons (2E.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.ReasonB�A

account_id (	B�A
hashed_account_id (B�AU
transaction_event (25.google.cloud.recaptchaenterprise.v1.TransactionEventB�A"~

Annotation
ANNOTATION_UNSPECIFIED 

LEGITIMATE

FRAUDULENT
PASSWORD_CORRECT
PASSWORD_INCORRECT"�
Reason
REASON_UNSPECIFIED 

CHARGEBACK
CHARGEBACK_FRAUD
CHARGEBACK_DISPUTE	

REFUND

REFUND_FRAUD
TRANSACTION_ACCEPTED
TRANSACTION_DECLINED
PAYMENT_HEURISTICS
INITIATED_TWO_FACTOR
PASSED_TWO_FACTOR
FAILED_TWO_FACTOR
CORRECT_PASSWORD
INCORRECT_PASSWORD
SOCIAL_SPAM"
AnnotateAssessmentResponse"�
EndpointVerificationInfo
email_address (	H 
phone_number (	H 
request_token (	B�A?
last_verification_time (2.google.protobuf.TimestampB�AB

endpoint"�
AccountVerificationInfoU
	endpoints (2=.google.cloud.recaptchaenterprise.v1.EndpointVerificationInfoB�A
language_code (	B�Al
latest_verification_result (2C.google.cloud.recaptchaenterprise.v1.AccountVerificationInfo.ResultB�A
username (	B"�
Result
RESULT_UNSPECIFIED 
SUCCESS_USER_VERIFIED
ERROR_USER_NOT_VERIFIED$
 ERROR_SITE_ONBOARDING_INCOMPLETE
ERROR_RECIPIENT_NOT_ALLOWED)
%ERROR_RECIPIENT_ABUSE_LIMIT_EXHAUSTED
ERROR_CRITICAL_INTERNAL"
ERROR_CUSTOMER_QUOTA_EXHAUSTED
ERROR_VERIFICATION_BYPASSED
ERROR_VERDICT_MISMATCH	"�
PrivatePasswordLeakVerification
lookup_hash_prefix (B�A,
encrypted_user_credentials_hash (B�A*
encrypted_leak_match_prefixes (B�A.
!reencrypted_user_credentials_hash (B�A"�

Assessment
name (	B�A�A>
event (2*.google.cloud.recaptchaenterprise.v1.EventB�AM
risk_analysis (21.google.cloud.recaptchaenterprise.v1.RiskAnalysisB�AS
token_properties (24.google.cloud.recaptchaenterprise.v1.TokenPropertiesB�A_
account_verification (2<.google.cloud.recaptchaenterprise.v1.AccountVerificationInfoB�Ah
account_defender_assessment (2>.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessmentB�Au
"private_password_leak_verification (2D.google.cloud.recaptchaenterprise.v1.PrivatePasswordLeakVerificationB�Af
firewall_policy_assessment
 (2=.google.cloud.recaptchaenterprise.v1.FirewallPolicyAssessmentB�Ah
fraud_prevention_assessment (2>.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessmentB�AM
fraud_signals (21.google.cloud.recaptchaenterprise.v1.FraudSignalsB�A^
phone_fraud_assessment (29.google.cloud.recaptchaenterprise.v1.PhoneFraudAssessmentB�A:x�Au
-recaptchaenterprise.googleapis.com/Assessment+projects/{project}/assessments/{assessment}*assessments2
assessment"�
Event
token (	B�A
site_key (	B�A

user_agent (	B�A$
user_ip_address (	B�A���
expected_action (	B�A 
hashed_account_id (B�A
express (B�A
requested_uri (	B�A!
waf_token_assessment	 (B�A
ja3
 (	B�A
headers (	B�A\'
firewall_policy_evaluation (B�AS
transaction_data (24.google.cloud.recaptchaenterprise.v1.TransactionDataB�AE
	user_info (2-.google.cloud.recaptchaenterprise.v1.UserInfoB�AY
fraud_prevention (2:.google.cloud.recaptchaenterprise.v1.Event.FraudPreventionB�A"N
FraudPrevention 
FRAUD_PREVENTION_UNSPECIFIED 
ENABLED
DISABLED"�

TransactionData
transaction_id (	H �
payment_method (	B�A
card_bin (	B�A
card_last_four (	B�A
currency_code (	B�A
value (B�A
shipping_value (B�A[
shipping_address (2<.google.cloud.recaptchaenterprise.v1.TransactionData.AddressB�AZ
billing_address (2<.google.cloud.recaptchaenterprise.v1.TransactionData.AddressB�AL
user (29.google.cloud.recaptchaenterprise.v1.TransactionData.UserB�AQ
	merchants (29.google.cloud.recaptchaenterprise.v1.TransactionData.UserB�AM
items (29.google.cloud.recaptchaenterprise.v1.TransactionData.ItemB�A[
gateway_info
 (2@.google.cloud.recaptchaenterprise.v1.TransactionData.GatewayInfoB�A�
Address
	recipient (	B�A
address (	B�A
locality (	B�A 
administrative_area (	B�A
region_code (	B�A
postal_code (	B�A�
User

account_id (	B�A
creation_ms (B�A
email (	B�A
email_verified (B�A
phone_number (	B�A
phone_verified (B�Af
Item
name (	B�A
value (B�A
quantity (B�A 
merchant_account_id (	B�A�
GatewayInfo
name (	B�A"
gateway_response_code (	B�A
avs_response_code (	B�A
cvv_response_code (	B�AB
_transaction_id"�
UserInfo<
create_account_time (2.google.protobuf.TimestampB�A

account_id (	B�AB
user_ids (2+.google.cloud.recaptchaenterprise.v1.UserIdB�A"`
UserId
email (	B�AH 
phone_number (	B�AH 
username (	B�AH B

id_oneof"�
RiskAnalysis
score (B�A\\
reasons (2F.google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReasonB�A%
extended_verdict_reasons (	B�A"�
ClassificationReason%
!CLASSIFICATION_REASON_UNSPECIFIED 

AUTOMATION
UNEXPECTED_ENVIRONMENT
TOO_MUCH_TRAFFIC
UNEXPECTED_USAGE_PATTERNS
LOW_CONFIDENCE_SCORE
SUSPECTED_CARDING
SUSPECTED_CHARGEBACK"�
TokenProperties
valid (B�A_
invalid_reason (2B.google.cloud.recaptchaenterprise.v1.TokenProperties.InvalidReasonB�A4
create_time (2.google.protobuf.TimestampB�A
hostname (	B�A!
android_package_name (	B�A
ios_bundle_id	 (	B�A
action (	B�A"�
InvalidReason
INVALID_REASON_UNSPECIFIED 
UNKNOWN_INVALID_REASON
	MALFORMED
EXPIRED
DUPE
MISSING
BROWSER_ERROR"�
FraudPreventionAssessment
transaction_risk (B�A~
stolen_instrument_verdict (2V.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment.StolenInstrumentVerdictB�At
card_testing_verdict (2Q.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment.CardTestingVerdictB�A|
behavioral_trust_verdict (2U.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment.BehavioralTrustVerdictB�A,
StolenInstrumentVerdict
risk (B�A\'
CardTestingVerdict
risk (B�A,
BehavioralTrustVerdict
trust (B�A"�
FraudSignalsX
user_signals (2=.google.cloud.recaptchaenterprise.v1.FraudSignals.UserSignalsB�AX
card_signals (2=.google.cloud.recaptchaenterprise.v1.FraudSignals.CardSignalsB�AP
UserSignals$
active_days_lower_bound (B�A
synthetic_risk (B�A�
CardSignalsa
card_labels (2G.google.cloud.recaptchaenterprise.v1.FraudSignals.CardSignals.CardLabelB�A"Z
	CardLabel
CARD_LABEL_UNSPECIFIED 
PREPAID
VIRTUAL
UNEXPECTED_LOCATION"�
SmsTollFraudVerdict
risk (B�Aa
reasons (2K.google.cloud.recaptchaenterprise.v1.SmsTollFraudVerdict.SmsTollFraudReasonB�A"U
SmsTollFraudReason%
!SMS_TOLL_FRAUD_REASON_UNSPECIFIED 
INVALID_PHONE_NUMBER"u
PhoneFraudAssessment]
sms_toll_fraud_verdict (28.google.cloud.recaptchaenterprise.v1.SmsTollFraudVerdictB�A"�
AccountDefenderAssessmenth
labels (2S.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment.AccountDefenderLabelB�A"�
AccountDefenderLabel&
"ACCOUNT_DEFENDER_LABEL_UNSPECIFIED 
PROFILE_MATCH
SUSPICIOUS_LOGIN_ACTIVITY
SUSPICIOUS_ACCOUNT_CREATION 
RELATED_ACCOUNTS_NUMBER_HIGH"�
CreateKeyRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A"�
ListKeysRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"c
ListKeysResponse6
keys (2(.google.cloud.recaptchaenterprise.v1.Key
next_page_token (	"]
RetrieveLegacySecretKeyRequest;
key (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"M
GetKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"�
UpdateKeyRequest:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"P
DeleteKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"�
CreateFirewallPolicyRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectQ
firewall_policy (23.google.cloud.recaptchaenterprise.v1.FirewallPolicyB�A"�
ListFirewallPoliciesRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"�
ListFirewallPoliciesResponseN
firewall_policies (23.google.cloud.recaptchaenterprise.v1.FirewallPolicy
next_page_token (	"c
GetFirewallPolicyRequestG
name (	B9�A�A3
1recaptchaenterprise.googleapis.com/FirewallPolicy"�
UpdateFirewallPolicyRequestQ
firewall_policy (23.google.cloud.recaptchaenterprise.v1.FirewallPolicyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"f
DeleteFirewallPolicyRequestG
name (	B9�A�A3
1recaptchaenterprise.googleapis.com/FirewallPolicy"�
ReorderFirewallPoliciesRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH
names (	B9�A�A3
1recaptchaenterprise.googleapis.com/FirewallPolicy"!
ReorderFirewallPoliciesResponse"r
MigrateKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key
skip_billing_check (B�A"U
GetMetricsRequest@
name (	B2�A�A,
*recaptchaenterprise.googleapis.com/Metrics"�
Metrics
name (	B�A�A.

start_time (2.google.protobuf.TimestampH
score_metrics (21.google.cloud.recaptchaenterprise.v1.ScoreMetricsP
challenge_metrics (25.google.cloud.recaptchaenterprise.v1.ChallengeMetrics:h�Ae
*recaptchaenterprise.googleapis.com/Metrics%projects/{project}/keys/{key}/metrics*metrics2metrics"<
RetrieveLegacySecretKeyResponse
legacy_secret_key (	"�
Key
name (	B�A
display_name (	B�AK
web_settings (23.google.cloud.recaptchaenterprise.v1.WebKeySettingsH S
android_settings (27.google.cloud.recaptchaenterprise.v1.AndroidKeySettingsH K
ios_settings (23.google.cloud.recaptchaenterprise.v1.IOSKeySettingsH S
express_settings (27.google.cloud.recaptchaenterprise.v1.ExpressKeySettingsH I
labels (24.google.cloud.recaptchaenterprise.v1.Key.LabelsEntryB�A4
create_time (2.google.protobuf.TimestampB�AQ
testing_options	 (23.google.cloud.recaptchaenterprise.v1.TestingOptionsB�AK
waf_settings
 (20.google.cloud.recaptchaenterprise.v1.WafSettingsB�A-
LabelsEntry
key (	
value (	:8:U�AR
&recaptchaenterprise.googleapis.com/Keyprojects/{project}/keys/{key}*keys2keyB
platform_settings"�
TestingOptions
testing_score (B�Ad
testing_challenge (2D.google.cloud.recaptchaenterprise.v1.TestingOptions.TestingChallengeB�A"^
TestingChallenge!
TESTING_CHALLENGE_UNSPECIFIED 
	NOCAPTCHA
UNSOLVABLE_CHALLENGE"�
WebKeySettings
allow_all_domains (B�A
allowed_domains (	B�A
allow_amp_traffic (B�Ab
integration_type (2C.google.cloud.recaptchaenterprise.v1.WebKeySettings.IntegrationTypeB�A{
challenge_security_preference (2O.google.cloud.recaptchaenterprise.v1.WebKeySettings.ChallengeSecurityPreferenceB�A"[
IntegrationType 
INTEGRATION_TYPE_UNSPECIFIED 	
SCORE
CHECKBOX
	INVISIBLE"v
ChallengeSecurityPreference-
)CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED 
	USABILITY
BALANCE
SECURITY"�
AndroidKeySettings$
allow_all_package_names (B�A"
allowed_package_names (	B�A6
)support_non_google_app_store_distribution (B�A"�
IOSKeySettings!
allow_all_bundle_ids (B�A
allowed_bundle_ids (	B�AV
apple_developer_id (25.google.cloud.recaptchaenterprise.v1.AppleDeveloperIdB�A"
ExpressKeySettings"Z
AppleDeveloperId
private_key (	B�A�A
key_id (	B�A
team_id (	B�A"�
ScoreDistribution_
score_buckets (2H.google.cloud.recaptchaenterprise.v1.ScoreDistribution.ScoreBucketsEntry3
ScoreBucketsEntry
key (
value (:8"�
ScoreMetricsO
overall_metrics (26.google.cloud.recaptchaenterprise.v1.ScoreDistribution\\
action_metrics (2D.google.cloud.recaptchaenterprise.v1.ScoreMetrics.ActionMetricsEntryl
ActionMetricsEntry
key (	E
value (26.google.cloud.recaptchaenterprise.v1.ScoreDistribution:8"o
ChallengeMetrics
pageload_count (
nocaptcha_count (
failed_count (
passed_count ("�
FirewallPolicyAssessment&
error (2.google.rpc.StatusB�AQ
firewall_policy (23.google.cloud.recaptchaenterprise.v1.FirewallPolicyB�A"�
FirewallActionP
allow (2?.google.cloud.recaptchaenterprise.v1.FirewallAction.AllowActionH P
block (2?.google.cloud.recaptchaenterprise.v1.FirewallAction.BlockActionH t
include_recaptcha_script (2P.google.cloud.recaptchaenterprise.v1.FirewallAction.IncludeRecaptchaScriptActionH V
redirect (2B.google.cloud.recaptchaenterprise.v1.FirewallAction.RedirectActionH Z

substitute (2D.google.cloud.recaptchaenterprise.v1.FirewallAction.SubstituteActionH Y

set_header (2C.google.cloud.recaptchaenterprise.v1.FirewallAction.SetHeaderActionH 
AllowAction
BlockAction
IncludeRecaptchaScriptAction
RedirectAction%
SubstituteAction
path (	B�A7
SetHeaderAction
key (	B�A
value (	B�AB
firewall_action_oneof"�
FirewallPolicy
name (	B�A
description (	B�A
path (	B�A
	condition (	B�AI
actions (23.google.cloud.recaptchaenterprise.v1.FirewallActionB�A:��A�
1recaptchaenterprise.googleapis.com/FirewallPolicy4projects/{project}/firewallpolicies/{firewallpolicy}*firewallPolicies2firewallPolicy"�
)ListRelatedAccountGroupMembershipsRequestX
parent (	BH�A�AB@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembership
	page_size (B�A

page_token (	B�A"�
*ListRelatedAccountGroupMembershipsResponsem
!related_account_group_memberships (2B.google.cloud.recaptchaenterprise.v1.RelatedAccountGroupMembership
next_page_token (	"�
ListRelatedAccountGroupsRequestN
parent (	B>�A�A86recaptchaenterprise.googleapis.com/RelatedAccountGroup
	page_size (B�A

page_token (	B�A"�
 ListRelatedAccountGroupsResponseX
related_account_groups (28.google.cloud.recaptchaenterprise.v1.RelatedAccountGroup
next_page_token (	"�
+SearchRelatedAccountGroupMembershipsRequestD
project (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

account_id (	B�A 
hashed_account_id (B�A
	page_size (B�A

page_token (	B�A"�
,SearchRelatedAccountGroupMembershipsResponsem
!related_account_group_memberships (2B.google.cloud.recaptchaenterprise.v1.RelatedAccountGroupMembership
next_page_token (	"�
AddIpOverrideRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/KeyR
ip_override_data (23.google.cloud.recaptchaenterprise.v1.IpOverrideDataB�A"
AddIpOverrideResponse"�
RelatedAccountGroupMembership
name (	B�A�A

account_id (	
hashed_account_id (B:��A�
@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembershipVprojects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}*relatedAccountGroupMemberships2relatedAccountGroupMembership"�
RelatedAccountGroup
name (	B�A�A:��A�
6recaptchaenterprise.googleapis.com/RelatedAccountGroup=projects/{project}/relatedaccountgroups/{relatedaccountgroup}*relatedAccountGroups2relatedAccountGroup"�
WafSettingsU
waf_service (2;.google.cloud.recaptchaenterprise.v1.WafSettings.WafServiceB�AU
waf_feature (2;.google.cloud.recaptchaenterprise.v1.WafSettings.WafFeatureB�A"o

WafFeature
WAF_FEATURE_UNSPECIFIED 
CHALLENGE_PAGE
SESSION_TOKEN
ACTION_TOKEN
EXPRESS"M

WafService
WAF_SERVICE_UNSPECIFIED 
CA

FASTLY

CLOUDFLARE"�
IpOverrideData
ip (	B�A���\\
override_type (2@.google.cloud.recaptchaenterprise.v1.IpOverrideData.OverrideTypeB�A"8
OverrideType
OVERRIDE_TYPE_UNSPECIFIED 	
ALLOW2�!
RecaptchaEnterpriseService�
CreateAssessment<.google.cloud.recaptchaenterprise.v1.CreateAssessmentRequest/.google.cloud.recaptchaenterprise.v1.Assessment"K�Aparent,assessment���1"#/v1/{parent=projects/*}/assessments:
assessment�
AnnotateAssessment>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest?.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentResponse"I�Aname,annotation���1",/v1/{name=projects/*/assessments/*}:annotate:*�
	CreateKey5.google.cloud.recaptchaenterprise.v1.CreateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"6�A
parent,key���#"/v1/{parent=projects/*}/keys:key�
ListKeys4.google.cloud.recaptchaenterprise.v1.ListKeysRequest5.google.cloud.recaptchaenterprise.v1.ListKeysResponse"-�Aparent���/v1/{parent=projects/*}/keys�
RetrieveLegacySecretKeyC.google.cloud.recaptchaenterprise.v1.RetrieveLegacySecretKeyRequestD.google.cloud.recaptchaenterprise.v1.RetrieveLegacySecretKeyResponse"A�Akey���53/v1/{key=projects/*/keys/*}:retrieveLegacySecretKey�
GetKey2.google.cloud.recaptchaenterprise.v1.GetKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"+�Aname���/v1/{name=projects/*/keys/*}�
	UpdateKey5.google.cloud.recaptchaenterprise.v1.UpdateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"?�Akey,update_mask���\'2 /v1/{key.name=projects/*/keys/*}:key�
	DeleteKey5.google.cloud.recaptchaenterprise.v1.DeleteKeyRequest.google.protobuf.Empty"+�Aname���*/v1/{name=projects/*/keys/*}�

MigrateKey6.google.cloud.recaptchaenterprise.v1.MigrateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"/���)"$/v1/{name=projects/*/keys/*}:migrate:*�
AddIpOverride9.google.cloud.recaptchaenterprise.v1.AddIpOverrideRequest:.google.cloud.recaptchaenterprise.v1.AddIpOverrideResponse"M�Aname,ip_override_data���/"*/v1/{name=projects/*/keys/*}:addIpOverride:*�

GetMetrics6.google.cloud.recaptchaenterprise.v1.GetMetricsRequest,.google.cloud.recaptchaenterprise.v1.Metrics"3�Aname���&$/v1/{name=projects/*/keys/*/metrics}�
CreateFirewallPolicy@.google.cloud.recaptchaenterprise.v1.CreateFirewallPolicyRequest3.google.cloud.recaptchaenterprise.v1.FirewallPolicy"Z�Aparent,firewall_policy���;"(/v1/{parent=projects/*}/firewallpolicies:firewall_policy�
ListFirewallPolicies@.google.cloud.recaptchaenterprise.v1.ListFirewallPoliciesRequestA.google.cloud.recaptchaenterprise.v1.ListFirewallPoliciesResponse"9�Aparent���*(/v1/{parent=projects/*}/firewallpolicies�
GetFirewallPolicy=.google.cloud.recaptchaenterprise.v1.GetFirewallPolicyRequest3.google.cloud.recaptchaenterprise.v1.FirewallPolicy"7�Aname���*(/v1/{name=projects/*/firewallpolicies/*}�
UpdateFirewallPolicy@.google.cloud.recaptchaenterprise.v1.UpdateFirewallPolicyRequest3.google.cloud.recaptchaenterprise.v1.FirewallPolicy"o�Afirewall_policy,update_mask���K28/v1/{firewall_policy.name=projects/*/firewallpolicies/*}:firewall_policy�
DeleteFirewallPolicy@.google.cloud.recaptchaenterprise.v1.DeleteFirewallPolicyRequest.google.protobuf.Empty"7�Aname���**(/v1/{name=projects/*/firewallpolicies/*}�
ReorderFirewallPoliciesC.google.cloud.recaptchaenterprise.v1.ReorderFirewallPoliciesRequestD.google.cloud.recaptchaenterprise.v1.ReorderFirewallPoliciesResponse"J�Aparent,names���5"0/v1/{parent=projects/*}/firewallpolicies:reorder:*�
ListRelatedAccountGroupsD.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupsRequestE.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupsResponse"=�Aparent���.,/v1/{parent=projects/*}/relatedaccountgroups�
"ListRelatedAccountGroupMembershipsN.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupMembershipsRequestO.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupMembershipsResponse"K�Aparent���<:/v1/{parent=projects/*/relatedaccountgroups/*}/memberships�
$SearchRelatedAccountGroupMembershipsP.google.cloud.recaptchaenterprise.v1.SearchRelatedAccountGroupMembershipsRequestQ.google.cloud.recaptchaenterprise.v1.SearchRelatedAccountGroupMembershipsResponse"e�Aproject,hashed_account_id���C">/v1/{project=projects/*}/relatedaccountgroupmemberships:search:*V�A"recaptchaenterprise.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.recaptchaenterprise.v1BRecaptchaEnterpriseProtoPZ\\cloud.google.com/go/recaptchaenterprise/v2/apiv1/recaptchaenterprisepb;recaptchaenterprisepb�GCRE�#Google.Cloud.RecaptchaEnterprise.V1�#Google\\Cloud\\RecaptchaEnterprise\\V1�&Google::Cloud::RecaptchaEnterprise::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

