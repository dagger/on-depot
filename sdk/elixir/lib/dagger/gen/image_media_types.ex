# This file generated by `dagger_codegen`. Please DO NOT EDIT.
defmodule Dagger.ImageMediaTypes do
  @moduledoc "Mediatypes to use in published or exported image metadata."

  @type t() :: :OCIMediaTypes | :DockerMediaTypes

  @spec oci_media_types() :: :OCIMediaTypes
  def oci_media_types(), do: :OCIMediaTypes

  @spec docker_media_types() :: :DockerMediaTypes
  def docker_media_types(), do: :DockerMediaTypes

  @doc false
  @spec from_string(String.t()) :: t()
  def from_string(string)

  def from_string("OCIMediaTypes"), do: :OCIMediaTypes
  def from_string("DockerMediaTypes"), do: :DockerMediaTypes
end
