<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\Model;

use DateTime;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Creating sub-account request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\Model
 */
class CreatingSubAccountRequest extends AbstractRequest {

    /**
     * Adresse.
     *
     * @var string
     */
    private $adresse;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Mobile.
     *
     * @var string
     */
    private $mobile;

    /**
     * New pass.
     *
     * @var string
     */
    private $newPass;

    /**
     * New pseudo.
     *
     * @var string
     */
    private $newPseudo;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Reference.
     *
     * @var string
     */
    private $reference;

    /**
     * Societe.
     *
     * @var string
     */
    private $societe;

    /**
     * Telephone.
     *
     * @var string
     */
    private $telephone;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

    /**
     * Get the adresse.
     *
     * @return string Returns the adresse.
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the date.
     *
     * @return DateTime Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the mobile.
     *
     * @return string Returns the mobile.
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Get the new pass.
     *
     * @return string Returns the new pass.
     */
    public function getNewPass() {
        return $this->newPass;
    }

    /**
     * Get the new pseudo.
     *
     * @return string Returns the new pseudo.
     */
    public function getNewPseudo() {
        return $this->newPseudo;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the reference.
     *
     * @return string Returns the reference.
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Get the societe.
     *
     * @return string Returns the societe.
     */
    public function getSociete() {
        return $this->societe;
    }

    /**
     * Get the telephone.
     *
     * @return string Returns the telephone.
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set the adresse.
     *
     * @param string $adresse The adresse.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the mobile.
     *
     * @param string $mobile The mobile.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setMobile($mobile) {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Set the new pass.
     *
     * @param string $newPass The new pass.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPass($newPass) {
        $this->newPass = $newPass;
        return $this;
    }

    /**
     * Set the new pseudo.
     *
     * @param string $newPseudo The new pseudo.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNewPseudo($newPseudo) {
        $this->newPseudo = $newPseudo;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Set the societe.
     *
     * @param string $societe The societe.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setSociete($societe) {
        $this->societe = $societe;
        return $this;
    }

    /**
     * Set the telephone.
     *
     * @param string $telephone The telephone.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return CreatingSubAccountRequest Returns this creating sub-account request.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    /**
     *  {@inhertidoc}
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        // Check the mandatory parameters.
        if (null === $this->newPseudo) {
            throw new NullPointerException("The mandatory parameter \"newPseudo\" is missing");
        }
        if (null === $this->newPass) {
            throw new NullPointerException("The mandatory parameter \"newPass\" is missing");
        }

        // Add the mandatory parameters.
        $output["newPseudo"] = $this->newPseudo;
        $output["newPass"]   = $this->newPass;

        // Check and add the optional parameters.
        ArrayHelper::set($output, "reference", $this->reference, [null]);
        ArrayHelper::set($output, "nom", $this->nom, [null]);
        ArrayHelper::set($output, "prenom", $this->prenom, [null]);
        ArrayHelper::set($output, "societe", $this->societe, [null]);
        ArrayHelper::set($output, "adresse", $this->adresse, [null]);
        ArrayHelper::set($output, "ville", $this->ville, [null]);
        ArrayHelper::set($output, "codePostal", $this->codePostal, [null]);
        ArrayHelper::set($output, "mobile", $this->mobile, [null]);
        ArrayHelper::set($output, "telephone", $this->telephone, [null]);
        ArrayHelper::set($output, "fax", $this->fax, [null]);
        ArrayHelper::set($output, "email", $this->email, [null]);
        if (null !== $this->date) {
            ArrayHelper::set($output, "date", $this->date->format(self::REQUEST_DATE_FORMAT), [null]);
        }

        // Return the output.
        return $output;
    }
}