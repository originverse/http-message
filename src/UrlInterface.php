<?php declare(strict_types=1);
/**
 * This file belongs to Nihylum's Origin Code Repository Universe.
 * 
 * (c) 2021 Matthias "nihylum" Kaschubowski
 * 
 * @package origin.http
 */
namespace Origin\Http;

/**
 * General Immutable Url Interface
 * 
 * @author Matthias Kaschubowski <nihylum@gmail.com>
 * @api 0.1
 */
interface UrlInterface extends Stringable
{
    /**
     * returns the mandatory scheme as a string.
     * 
     * @return string
     */
    public function getScheme(): string;

    /**
     * sets the mandatory scheme by a string into a cloned object.
     * 
     * @param string $newScheme the new scheme string
     * @return UrlInterface
     */
    public function withScheme(string $newScheme): UrlInterface;

    /**
     * returns the mandatory Host as a string.
     * 
     * @return string
     */
    public function getHost(): string;

    /**
     * sets the mandatory host by a string into a cloned object.
     * 
     * @param string $newHost the new host string
     * @return UrlInterface
     */
    public function withHost(string $newHost): UrlInterface

    /**
     * returns the optional authority object. 
     * 
     * @return null|UrlAuthorityInterface
     */
    public function getAuthority(): ? UrlAuthorityInterface;

    /**
     * sets the optional authority by an authority object.
     * 
     * @param UrlAuthorityInterface $newAuthority
     * @return UrlInterface
     */
    public function withAuthority(UrlAuthorityInterface $newAuthority): UrlInterface;

    /**
     * removes a possibly stored authority object from the URL from a cloned object.
     * 
     * @return UrlInterface.
     */
    public function removeAuthority(): UrlInterface;

    /**
     * retruns the optional user part of the authority object as a string.
     * 
     * @return null|string
     */
    public function getUser(): ? string;

    /**
     * sets the optional user authority part into a cloned object.
     * 
     * @param string $newUsername the new username
     * @return UrlInterface
     */
    public function withUser(string $newUsername): UrlInterface;

    /**
     * returns the optional password part of the authority object as a string.
     * 
     * @return null|string
     */
    public function getPassword(): ? string;

    /**
     * sets the optional password authority part into a cloned object.
     * 
     * @param string $newPassword the new password
     * @return UrlInterface
     */
    public function withPassword(string $newPassword): UrlInterface;

    /**
     * returns the optional port of the URL as an integer.
     * 
     * @return null]int
     */
    public function getPort(): ? int;

    /**
     * sets the optional port of the URL by an integer into a cloned object.
     * 
     * @param int $newPort the new Port number
     * @return UrlInterface
     */
    public function withPort(int $newPort): UrlInterface;

    /**
     * returns the optional path of the URL, if none is stored a nullable configurable default must be served.
     * If no default is configured the default for the path is '/'.
     * 
     * @return null|string
     */
    public function getPath(? string $default = '/'): ? string;

    /**
     * sets the optional path of the URL into a cloned object.
     * 
     * @param string $newPath the new path
     * @return UrlInterface
     */
    public function withPath(string $newPath): UrlInterface;

    /**
     * removes a possibly path from the url at a cloned object.
     * 
     * @return UrlInterface
     */
    public function withoutPath(): UrlInterface;

    /**
     * returns the query parameters object/container of the URL.
     * 
     * @return UrlQueryParametersInterface
     */
    public function getQueryParametersObject(): UrlQueryParametersInterface;

    /**
     * sets the optional query parameters by an array of given parameters associated with values who do collapse
     * to a string into a cloned object.
     * 
     * @param array $queryParameters
     * @return UrlInterface
     */
    public function withQueryParameters(array $queryParameters): UrlInterface;

    /**
     * sets the optional query parameters by an query parameters object/container into a cloned object.
     * 
     * @param UrlQueryParametersInterface $newQueryParameterObject the new query parameters object/container
     * @return UrlInterface
     */
    public function withQueryParametersObject(UrlQueryParametersInterface $newQueryParameterObject): UrlInterface;

    /**
     * returns an possible given optional query parameter by its parameter name. The result of this query can result into
     * a string or array.
     * 
     * @param string $parameterName name of the queried parameter
     * @return array|string
     */
    public function getQueryParameter(string $parameterName): Array | String;

    /**
     * sets a a optional query parameter by the given parameter name and given value into a cloned object, the provided
     * value must collapse to a string.
     * 
     * @param string $parameter the parameter name
     * @param mixed $value
     */
    public function withQueryParameter(string $parameter, $value): UrlInterface;

    /**
     * removes the provided parameter names form the query parameters into a clone object.
     * 
     * @param string[] $parameters the given parameters to remove
     * @return UrlInterface
     */
    public function withoutQueryParameters(string ... $paramters): UrlInterface;

    /**
     * removes all query parameters from the URL into a cloned object.
     * 
     * @return UrlInterface
     */
    public function withoutQueryParameter(): UrlInterface;

    /**
     * returns the optional fragment of the URL.
     * 
     * @return null|string
     */
    public function getFragment(): ? string;

    /**
     * sets the optional fragment into a cloned object. The string provided to this function should not serve the
     * initial hash sign of a fragment, if it does it will served as given.
     * 
     * @param string $newFragment the new fragment string
     * @return UrlInterface
     */
    public function withFragment(string $newFragment): UrlInterface;

    /**
     * removes the optional fragment of the URL into a cloned object.
     * 
     * @return UrlInterface
     */
    public function withoutFragment(): UrlInterface;
}
